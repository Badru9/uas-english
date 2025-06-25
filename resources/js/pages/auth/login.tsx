import { Button, Checkbox, Form, Input, Link, Spinner } from '@heroui/react';
import { useForm } from '@inertiajs/react';
import { FormEventHandler } from 'react';
import { z } from 'zod';

const LoginFormSchema = z.object({
    email: z.string().email('Email is not valid'),
    password: z.string().min(8, 'Password at least 8 character'),
    remember: z.boolean(),
});

type LoginForm = z.infer<typeof LoginFormSchema>;

interface LoginProps {
    // status?: string;
    canResetPassword: boolean;
}

export default function Login({ canResetPassword }: LoginProps) {
    const { data, setData, post, processing, reset } = useForm<LoginForm>({
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
        <main className="relative flex min-h-screen w-full items-center justify-center">
            <img src="/shape-bg.png" alt="shape-bg" className="fixed inset-0 -z-10" />

            <Form className="bg-smoke-white flex flex-col gap-6 rounded-3xl p-10" onSubmit={submit}>
                <div className="flex flex-col items-center justify-center space-y-2 text-slate-800">
                    <h3 className="text-2xl font-semibold">Login to Account</h3>
                    <p className="font-semibold text-slate-600">Please enter your email and password to continue</p>
                </div>
                <div className="flex w-full flex-col gap-3">
                    <Input
                        id="email"
                        label="Email"
                        labelPlacement="outside"
                        aria-label="input email"
                        placeholder="fahmi121@gmail.com"
                        type="email"
                        color="primary"
                        radius="sm"
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
                        aria-label="input password"
                        color="primary"
                        radius="sm"
                        type="password"
                        placeholder="*****"
                        required
                        tabIndex={2}
                        autoComplete="current-password"
                        value={data.password}
                        onChange={(e) => setData('password', e.target.value)}
                    />

                    <div className="flex items-center text-slate-800">
                        <Checkbox
                            id="remember"
                            name="remember"
                            aria-label="remember password"
                            checked={data.remember}
                            onClick={() => setData('remember', !data.remember)}
                            tabIndex={3}
                        >
                            Remember Password
                        </Checkbox>
                    </div>

                    <Button type="submit" color="primary" className="mt-4 w-full" tabIndex={4} disabled={processing}>
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
