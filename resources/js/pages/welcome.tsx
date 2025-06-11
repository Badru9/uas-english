import { Head } from '@inertiajs/react';
import Login from './auth/login';

export default function Welcome() {
    return (
        <>
            <Head title="Welcome to English" />
            <Login canResetPassword={false} />
        </>
    );
}
