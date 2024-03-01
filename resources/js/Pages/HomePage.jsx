import { WelcomeLayout } from '@/Layouts/WelcomeLayout';
import React from 'react';
import Login from './Auth/Login';
import Guest from '@/Layouts/GuestLayout';
import Register from './Auth/Register';

function HomePage({ page, fraseRandom, autorFrase }) {
    return (
        <WelcomeLayout>
            <div className="container welcome-container bg-light rounded shadow p-1 ">
                <div className="row">
                    <h1 className='h1 text-center '>Bienvenido a  Nutrition<span className='text-accent'>App</span></h1>
                </div>
                <div className="row   row-container-login ">
                    <div className="col-md-6 d-flex align-items-center ">
                        <div className="login-slogan">
                            <blockquote className="blockquote text-center">
                                "{fraseRandom}"
                            </blockquote>
                            <footer className="blockquote-footer text-center">
                                <cite title="Source Title">{autorFrase}</cite>
                            </footer>
                        </div>

                        <div className="image-container">
                            <div className="background-image-login">

                            </div>

                        </div>
                    </div>
                    <div className="col-md-6 d-flex align-items-center flex-column justify-content-start h-100">
                        {/* <h2 className='h2 pb-3 pt-2'>Por favor {page === 'Login' ? 'Inicia Sesion' : 'Registrate'}</h2> */}
                        {page === 'Login' ? <Login /> : null}
                        {page === 'Register' ? <Register /> : ''}

                    </div>
                </div>
            </div>


        </WelcomeLayout >
    );
}

export default HomePage;
