@extends('partials.base')
@section('content')
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                      d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
            </svg>
            <h1>Authentication</h1>
            <p>This is the process of determining whether someone or something is.</p>
        </div>
    </header>
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{asset('public')}}/images/title-shape.png" alt="Image"></figure>
                        <h2>Sign In / Sign Up</h2>
                        @if (\Illuminate\Support\Facades\Session::has('message'))
                            <br>
                            <p style="color: #980a3c;margin-right: auto;margin-left: auto;font-size: 30px">
                                {{\Illuminate\Support\Facades\Session::get('message')}}
                            </p>
                        @endif
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form action="{{route('sign')}}" method="post">
                            @csrf
                            <div id="name" class="mb-3" style="display:none">
                                <input id="name_input" name="Name" style="width: 100%" type="text" placeholder="Complete Name">
                            </div>
                            <div class="mb-3">
                                <input name="EmailAddress" type="email" style="width: 100%" placeholder="E-mail Address" required>
                            </div>
                            <div class="mb-3">
                                <input id="password_input" name="Password" type="password" style="width: 100%" placeholder="Password" required>
                            </div>
                            <div id="password_confirmation" class="mb-3" style="display:none;">
                                <input id="password_confirmation_input" name="PasswordConfirmation" style="width: 100%" type="password" placeholder="Password Confirmation">
                            </div>
                            <div class="mb-3">
                                <input id="btn" type="submit" value="Sign In" style="margin-right: 20px">
                                <input type="button" onclick="sign(this)" style="background-color: #FFFBF7;border: none;font-family: inherit;" value="No Account? Sign Up!">
                            </div>
                        </form>
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <script>
        function sign(elelment) {
            event.preventDefault()
            if (elelment.value === 'No Account? Sign Up!') {
                document.getElementById('name').style.display = 'block';
                document.getElementById('name_input').required = 'required';
                document.getElementById('password_confirmation').style.display = 'block';
                document.getElementById('password_confirmation_input').required = 'required';
                document.getElementById('password_input').onclick = onChange;
                document.getElementById('password_confirmation_input').onclick = onChange;
                document.getElementById('btn').value='Sign Up'
                elelment.value = 'Already Account? Sign In!'
            } else {
                document.getElementById('name').style.display = 'none';
                document.getElementById('name_input').required = '';
                document.getElementById('password_confirmation').style.display = 'none';
                document.getElementById('password_confirmation_input').required = '';
                document.getElementById('password_input').onclick = function (){};
                document.getElementById('password_confirmation_input').onclick = function (){};
                document.getElementById('btn').value='Sign In'
                elelment.value = 'No Account? Sign Up!'
            }
        }
        function onChange() {
            const password = document.querySelector('input[name=Password]');
            const confirm = document.querySelector('input[name=PasswordConfirmation]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
            } else {
                confirm.setCustomValidity('Passwords do not match!');
            }
        }
    </script>
@endsection
