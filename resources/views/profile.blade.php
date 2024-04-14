@extends('parts.layout')

@section('content')

    <div class="profile">
        <div class="profile-content">
            <div class="profile-avatar">
                @if (\Illuminate\Support\Facades\Auth::user()->avatar)
                    <img src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="">
                @else
                    <img src="/images/user-photo.png" alt="">
                @endif

                    <a href="/home/avatar">Змінити аватар</a>

            </div>
            <div class="profile-information">
                <h2>Профіль користувача <em>{{ \Illuminate\Support\Facades\Auth::user()->email }}</em></h2>
            </div>
        </div>
    </div>

@endsection

<style>
    .profile {
        * {
            color: #fff;
        }
        .profile-content {
            width: 80%;
            margin: 0 auto;
            display: flex;
            align-content: flex-start;
            .profile-avatar {
                margin-right: 20px;
                width: 10%;
                img {
                    width: 100%;
                    border-radius: 100%;
                    overflow: hidden;
                }
                a {
                    margin-top: 20px;
                    width: 100%;
                    display: block;
                    text-align: center;
                    text-decoration: underline;
                }
            }
            .profile-information {
                h2 {
                    font-size: 30px;
                    em {
                        text-decoration: underline;
                        font-style: normal;
                    }
                }
            }
        }

        height: 100vh;
        padding-top: 250px;
    }
</style>
