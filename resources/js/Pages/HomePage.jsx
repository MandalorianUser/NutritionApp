import { WelcomeLayout } from '@/Layouts/WelcomeLayout';
import React from 'react';
import Login from './Auth/Login';
import Guest from '@/Layouts/GuestLayout';
import Register from './Auth/Register';

function HomePage({ page, fraseRandom, autorFrase }) {
    return (
        <WelcomeLayout>
            <div className="container welcome-container bg-light rounded shadow-xl ">
                <div className="row">
                    <h1 className='h1 text-center '>Welcome to Nutrition<span className='text-accent'>App</span></h1>
                </div>
                <div className="row  border row-container-login">
                    <div className="col d-flex align-items-center ">
                    <div className="login-slogan">
                                <blockquote className='blockquote'>{fraseRandom}</blockquote>
                                <p className='login-slogan-autor'>{autorFrase}</p>
                            </div>
                        <div className="image-container">
                            <div className="background-image-login">
                            
                            </div>
                          
                        </div>
                    </div>
                    <div className="col d-flex align-items-center flex-column justify-content-start">
                        <h2 className='h2 pb-3 pt-2'>Por favor inicia Sesion</h2>
                        {page === 'Login' ? <Login /> : null}
                        {page === 'register' ? <Register /> : null}

                    </div>
                </div>
            </div>


        </WelcomeLayout >
    );
}

export default HomePage;
