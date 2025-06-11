import { Button, Checkbox, Form, Input, Link, Spinner } from '@heroui/react';
import { useForm } from '@inertiajs/react';
import { FormEventHandler } from 'react';

type LoginForm = {
    email: string;
    password: string;
    remember: boolean;
};

interface LoginProps {
    status?: string;
    canResetPassword: boolean;
}

export default function Login({ status, canResetPassword }: LoginProps) {
    const { data, setData, post, processing, errors, reset } = useForm<Required<LoginForm>>({
        email: '',
        password: '',
        remember: false,
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <main className="bg-primary flex min-h-screen w-full items-center justify-center">
            <img src="/shape-bg.jpg" alt="shape-bg" className="fixed inset-0" />

            <Form className="flex flex-col gap-6 bg-white" onSubmit={submit}>
                <div className="grid gap-6">
                    <Input
                        id="email"
                        label="Email"
                        labelPlacement="outside"
                        type="email"
                        required
                        autoFocus
                        tabIndex={1}
                        autoComplete="email"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                    />

                    <div className="flex items-center">
                        {canResetPassword && (
                            <Link href={route('password.request')} className="ml-auto text-sm" tabIndex={5}>
                                Forgot password?
                            </Link>
                        )}
                    </div>
                    <Input
                        id="password"
                        label="Password"
                        labelPlacement="outside"
                        type="password"
                        required
                        tabIndex={2}
                        autoComplete="current-password"
                        value={data.password}
                        onChange={(e) => setData('password', e.target.value)}
                    />

                    <div className="flex items-center space-x-3">
                        <Checkbox
                            id="remember"
                            name="remember"
                            checked={data.remember}
                            onClick={() => setData('remember', !data.remember)}
                            tabIndex={3}
                            placeholder="Remember Me"
                        />
                    </div>

                    <Button type="submit" className="mt-4 w-full" tabIndex={4} disabled={processing}>
                        {processing && <Spinner size="sm" variant="gradient" />}
                        Log in
                    </Button>
                </div>

                <div className="text-muted-foreground text-center text-sm">
                    Don't have an account?{' '}
                    <Link href={route('register')} tabIndex={5}>
                        Sign up
                    </Link>
                </div>
            </Form>
        </main>
    );
}
