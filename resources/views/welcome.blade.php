<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="{{ asset('js/font_awesome.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <title>Guillaume Leon</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Guillaume Leon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav">
                <li><a class="nav-link " href="#">@lang('content.project')</a></li>
                <li><a class="nav-link" href="#comp">@lang('content.skill')</a></li>
                <li><a class="nav-link" href="#diplome">@lang('content.degree')</a></li>
                <li><a class="nav-link" href="#experience">@lang('content.experience')</a></li>
                <li><a class="nav-link" href="#contact">@lang('content.contact')</a></li>
                <li><a class="nav-link" href="{{ asset('pdf/CV_Guillaume-LEON.pdf') }}" target="_blank">CV</a></li>
                @if(Auth::check())
                    <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
                @endif
            </ul>
        </ul>
        <ul class="navbar-nav">
            @if(isset($_GET['lang']) && $_GET['lang'] === 'en')
                <li><a href="/"><img class="mt-1" src="{{ asset('image/united-states-of-america.png') }}" alt="Us" height="32"></a></li>
            @else
                <li><a href="/?lang=en"><img class="mt-1" src="{{ asset('image/france.png') }}" alt="FR" height="32"></a></li>
            @endif
        </ul>

    </div>
</nav>
<section>
    <div class="titre">
        <h3>@lang('content.project')</h3>

    </div>
    <div class="container">
        <div class="row">
            @foreach($response as $project)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2">
                    <div class="box-part text-center shadow p-4" style="border: 1px solid rgba(0,0,0,.125)">
                        <div class="title">
                            <h4>{{ $project['name'] }}</h4>
                        </div>
                        <div class="text">
                            <span>{!! $project['description'] !!}.</span>
                        </div>
                        @if(empty($project['homepage']))
                            <a class="link_project disabled-link" href="{{ $project['homepage'] }}">@lang('content.goto')</a>
                        @else
                            <a class="link_project" href="{{ $project['homepage'] }}"> @lang('content.goto')</a>
                        @endif
                        |
                        <a class="link_project" href="https://github.com/{{ $project['full_name'] }}"
                           target="_blank">@lang('content.code')</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<div id="comp"></div>
<section>
    <div class="titre">
        <h3>@lang('content.skill')</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
                <div class="card shadow m-4 col-sm-12 col-md-12" style="width:600px;">
                    <div class="card-header">
                        <h3 class="pt-3 pl-3">Front-End</h3>
                    </div>
                    <div class="row card-content p-4">
                        <div class="col p-3 text-center"><img src="{{ asset('image/html5.png') }}" alt="html" height="100" width="100">
                            <p class="text-center pt-2">HTML5</p>
                        </div>
                        <div class="col p-3 text-center"><img src="{{ asset('image/css3.png') }}" alt="css" height="100" width="100">
                            <p class="text-center pt-2">CSS3</p>
                        </div>
                        <div class="col p-3 text-center"><img src="{{ asset('image/javascript.png') }}" alt="javascript" height="100"
                                                              width="100">
                            <p class="text-center pt-2">Javascript</p>
                        </div>
                        <div class="col p-3 text-center"><img src="{{ asset('image/bootstrap.png') }}" alt="bootstrap" height="100"
                                                              width="100">
                            <p class="text-center pt-2">Bootstrap 4</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow m-4 col-sm-12 col-md-6">
                    <div class="card-header">
                        <h3 class="pt-3 pl-3">Back-End</h3>
                    </div>
                    <div class="row card-content p-4">
                        <div class="col p-3 text-center"><img src="image/php.png" alt="php" height="100" width="100">
                            <p class="text-center pt-2">PHP</p>
                        </div>
                        <div class="col p-3 text-center"><img src="image/mysql.png" alt="MySQL" height="100"
                                                              width="100">
                            <p class="text-center pt-2">MySQL</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="card shadow m-4 col-sm-12 col-md-6">
                    <div class="card-header">
                        <h3 class="pt-3 pl-3">Framework</h3>
                    </div>
                    <div class="row card-content p-4 text-center">
                        <div class="col p-3 text-center"><img src="image/laravel.png" alt="Laravel" height="100"
                                                              width="100">
                            <p class="text-center pt-2">Laravel</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow m-4 col-sm-12 col-md-12">
                    <div class="card-header">
                        <h3 class="pt-3 pl-3">@lang('content.other')</h3>
                    </div>
                    <div class="row card-content p-4">
                        <div class="col p-3 text-center"><img src="image/git.png" alt="Git" height="100" width="100">
                            <p class="text-center pt-2">Git</p>
                        </div>
                        <div class="col p-3 mt-4 text-center"><img src="image/aws.png" alt="Linux" height="72"
                                                                   width="120">
                            <p class="text-center pt-2">AWS</p>
                        </div>
                        <div class="col p-3 text-center"><img alt="Linux" height="100" src="image/linux.png"
                                                              width="100" />
                            <p class="text-center pt-2">Linux</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<div id="diplome"></div>
<section>
    <div class="titre">
        <h3>@lang('content.degree')</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6">
                <div class="card shadow m-4" style="min-height: 225px;">
                    <div class="card-header">
                        <h3><a href="http://www.lyceecassin-leraincy.fr/" target="_blank">@lang('content.highschool')</a></h3>
                    </div>
                    <div class="card-content p-3">
                        <p>@lang('content.location_hs')</p>
                        <ul>
                            <li>@lang('content.desc_hs')</li>
                            <li>@lang('content.more')</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card shadow m-4" style="min-height: 225px;">
                    <div class="card-header">
                        <h3><a href="https://iutb.univ-paris13.fr/" target="_blank">@lang('content.dut')</a></h3>
                    </div>
                    <div class="card-content p-3">
                        <p>@lang('content.location_dut')</p>
                        <ul>
                            <li>@lang('content.desc_dut')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div id="experience"></div>
<section>
    <div class="titre">
        <h3>@lang('content.experience_pro')</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card shadow m-4" style="width: 19rem;">
                <div class="card-header p-2">
                    <img class="text-center" alt="Logo groupe progress" src="image/progress.png" width="280" />
                </div>
                <div class="card-body p-3">
                    <h4 class="card-title"><a href="https://www.groupeprogress.com/" target="_blank">@lang('content.name_gp')</a></h4>
                    <p class="card-text">@lang('content.desc_gp')</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="contact"></div>
<section>
    <div class="titre">
        <h3>@lang('content.contact')</h3>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5 offset-md-4">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <div class="container-fluid d-flex">
                            <div class="alert-icon col-md-2">
                                <i class="fas fa-check"></i>
                            </div>

                            <div class="col-md-8">
                                {!! Session::get('success') !!}
                            </div>
                            <button type="button" class="close col-md-2" data-dismiss="alert" aria-label="Close"
                                    onclick="$('.alert').remove();">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
            </div>
            @endif
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-xl-8 col-md-12 mt-1">
                <div class="card">
                    <div class="card-header text-white" style="background-color:#375a7f"> @lang('content.contact_me')
                    </div>
                    <div class="card-body">
                        <form method="post" action="/contact">
                            @csrf
                            <div class="form-group">
                                <label for="name">@lang('content.name')</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       aria-describedby="emailHelp" placeholder="@lang('content.placeholder_name')" required>
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('content.email')</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       aria-describedby="emailHelp" placeholder="@lang('content.placeholder_email')" required>
                            </div>
                            <div class="form-group">
                                <label for="message">@lang('content.message')</label>
                                <textarea class="form-control" name="message" id="message" rows="6"
                                          required></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right">@lang('content.send')</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 col-md-6 offset-md-3 offset-xl-0 mt-1">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white">@lang('content.other_contact')</div>
                    <div class="card-body">
                        <p><i class="fas fa-envelope mr-1"></i> guillaume.leon2000@gmail.com</p>
                        <p><i class="fas fa-phone mr-1"></i> +33 06 04 01 32 95</p>
                        <p><i class="fab fa-linkedin mr-2"></i><a
                                href="https://www.linkedin.com/in/guillaume-leon-b5382616b/"
                                target="_blank">Linkedin</a></p>
                        <p><i class="fab fa-github mr-2"></i><a href="https://www.github.com/GuillaumeLeon/"
                                                                target="_blank">Github</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer font-small bg-dark text-white mt-5">
    <div class="footer-copyright text-center py-3">
        Created by <a href="https://guillaumeleon.xyz">Guillaume Leon</a>
        <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </div>
</footer>
</body>

</html>
