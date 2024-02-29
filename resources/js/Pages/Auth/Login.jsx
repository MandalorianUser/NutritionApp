import { useEffect } from 'react';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        post(route('login'));
    };

    return (
        <div className='login-form '>
            {status && <div className=" font-medium text-sm text-success">{status}</div>}

            <form onSubmit={submit}>
                <div className="">
                    <label htmlFor="email" className="form-label">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="form-control"
                        autoComplete="username"
                        autoFocus
                        onChange={(e) => setData('email', e.target.value)}
                    />
                    {errors.email && <div className="text-danger">{errors.email}</div>}
                </div>

                <div className="">
                    <label htmlFor="password" className="form-label">Contraseña</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        value={data.password}
                        className="form-control"
                        autoComplete="current-password"
                        onChange={(e) => setData('password', e.target.value)}
                    />
                    {errors.password && <div className="text-danger">{errors.password}</div>}
                </div>

                <div className="mb-3 form-check">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        className="form-check-input"
                        checked={data.remember}
                        onChange={(e) => setData('remember', e.target.checked)}
                    />
                    <label htmlFor="remember" className="form-check-label">Recordarme</label>
                </div>

                <div className="d-flex justify-content-end mb-3">
                    {canResetPassword && (
                        <Link
                            href={route('password.request')}
                            className="text-decoration-none me-3 text-secondary"
                        >
                            ¿Olvidaste tu contraseña?
                        </Link>
                    )}
                    <button type="submit" className="btn btn-success w-100 p-2 fs-5">Iniciar sesión</button>
                </div>

                <div className="mt-5">
                    <p className='text-secondary'>No tienes cuenta aun ?</p>
                    <Link href={route('home.register')} className='btn btn-outline-success'>Registrate</Link>
                </div>
            </form>
        </div>
    );
}
