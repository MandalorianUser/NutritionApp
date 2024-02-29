import { useEffect } from 'react';
import { Head, Link, useForm } from '@inertiajs/react';
import GuestLayout from '../../Layouts/GuestLayout';

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        post(route('register'));
    };

    return (
        <GuestLayout>
            <form onSubmit={submit}>
                <div className="mb-1">
                    <label htmlFor="name" className="form-label">Nombre</label>
                    <input
                        id="name"
                        name="name"
                        value={data.name}
                        className="form-control w-100"
                        autoComplete="name"
                        autoFocus
                        onChange={(e) => setData('name', e.target.value)}
                        required
                    />
                    {errors.name && <div className="text-danger">{errors.name}</div>}
                </div>

                <div className="mb-1">
                    <label htmlFor="email" className="form-label">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="form-control w-100"
                        autoComplete="username"
                        onChange={(e) => setData('email', e.target.value)}
                        required
                    />
                    {errors.email && <div className="text-danger">{errors.email}</div>}
                </div>

                <div className="mb-1">
                    <label htmlFor="password" className="form-label">Contraseña</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        value={data.password}
                        className="form-control w-100"
                        autoComplete="new-password"
                        onChange={(e) => setData('password', e.target.value)}
                        required
                    />
                    {errors.password && <div className="text-danger">{errors.password}</div>}
                </div>

                <div className="mb-1">
                    <label htmlFor="password_confirmation" className="form-label">Confirmar Contraseña</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        value={data.password_confirmation}
                        className="form-control w-100"
                        autoComplete="new-password"
                        onChange={(e) => setData('password_confirmation', e.target.value)}
                        required
                    />
                    {errors.password_confirmation && <div className="text-danger">{errors.password_confirmation}</div>}
                </div>

                <div className="mb-4 mt-3">
                    <button type="submit" className='btn w-100 btn-success'>Registrame</button>
                </div>

                <div className="d-flex  justify-content-between align-items-baseline mb-2  text-bottom" style={{'height':'40px'}}>
                    <div className="text-secondary  ms-3  ">¿Ya tienes una cuenta?</div>
                    <Link href={route('home.login')} className="btn btn-outline-success w-50 ms-2">
                        Inicia Sesion
                    </Link>
                </div>


            </form>
        </GuestLayout>
    );
}
