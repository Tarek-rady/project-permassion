<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">

                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>

            </ul>



        </div>


        <ul class="nav navbar-nav align-items-center ml-auto">

            {{-- start  light  --}}
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            {{-- start  light  --}}


            {{-- start  notifications  --}}
            @php
                $notifications = App\Models\Notification::where('read' , '=' , 0)->get();
                $notifications_count = App\Models\Notification::where('read' , '=' , 0)->count();

            @endphp

            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">{{ $notifications_count }}</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">{{ __('models.notifications') }}</h4>
                            <div class="badge badge-pill badge-light-primary"> {{ $notifications_count }} {{ __('models.new') }}</div>
                        </div>
                    </li>


                    @foreach ( $notifications as $notification)

                    <li class="scrollable-container media-list">
                        <a class="d-flex" href="{{ route('admin.notification' , $notification->id ) }}">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="{{ asset('storage/admins/1.png') }}" alt="avatar" width="32" height="32"></div>
                                </div>
                                @if ($notification->order_id)

                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">{{ $notification->title }} : <small class="notification-text">{{ __('models.code') }}{{ $notification->order->code }}</small></p>
                                            <small class="notification-text">
                                                {{ $notification->created_at->diffForHumans() }}
                                            </small>
                                    </div>
                                @else

                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">{{ $notification->title }} : <small class="notification-text">{{ __('models.code') }}{{ $notification->career_applly->id }}</small></p>
                                        <small class="notification-text">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </small>
                                </div>

                                @endif
                            </div>
                        </a>
                    </li>
                    @endforeach

                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="{{ route('admin.notifications') }}">Read all notifications</a></li>
                </ul>
            </li>
            {{-- end  notifications  --}}

            <li class="nav-item dropdown dropdown-language">

                @if (App::getLocale() == 'ar')
                    <a class="dropdown-item" href="{{ route('language', 'en') }}" data-language="en"><i
                            class="flag-icon flag-icon-us"></i></a>
                @else

                <a class="dropdown-item" href="{{ route('language', 'ar') }}" data-language="ar"><i
                    class="flag-icon flag-icon-sa"></i></a>
                @endif

            </li>


            {{-- start  user  --}}
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span><span class="user-status">{{ __('models.admin') }}</span></div>
                     <span class="avatar">

                        @if (auth()->user()->img)
                         <img class="round" src="{{ asset('storage/' . auth()->user()->img) }}" alt="avatar" height="40" width="40">
                        @else
                          <img class="round" src="{{ asset('storage/admins/1.png') }}" alt="avatar" height="40" width="40">
                        @endif

                    <span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="mr-50" data-feather="settings"></i> {{ __('models.profile') }}
                    </a>

                    <a class="dropdown-item" href="{{ route('admin.logout') }}">
                        <i class="mr-50" data-feather="power"></i> {{ __('models.logout') }}
                    </a>
                </div>
            </li>
             {{-- end  user  --}}


        </ul>
    </div>
</nav>


