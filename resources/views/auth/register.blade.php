@extends('layouts.app')

@section('content')
    <!--  end header of web apps -->
    <div class="app-oner">
        <center>

            <div class="app-three">

                <div class="app-nine">
                    <div class="app-ten">
                        <a href="#">دخول الاعضاء  <i class="fas fa-user-alt"></i> </a>
                    </div>
                    <div class="app-ten">
                        <a href="#">دخول الموظفين <i class=""></i></a>
                    </div>
                    <div class="app-ten">
                        <a href="#">دخول الادمن <i class="fas fa-user-astronaut"></i></a>
                    </div>

                </div>


                <div class="app-seven">
                    @if($errors->any())
                        @foreach($errors->all() as $message)
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @endforeach
                    @endif
                    <form action="{{route('register')}}" method="POST">
                        @csrf

                        <div class="add-onex">
                            <input type="text" placeholder="برجاء ادخال اسم المستخدم"   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="add-onex">
                            <input type="email" placeholder="برجاء ادخال البريد الالكتروني"  name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="add-onex">
                            <input type="password" placeholder="كلمه المرور"  name="password" required autocomplete="new-password">

                        </div>
                        <div class="add-onex">
                            <input type="password" placeholder="تاكيد كلمه السر"  name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="add-onex">
                            <input type="submit" value="تسجيل الحساب">

                        </div>

                    </form>
                </div>


            </div>

        </center>

    </div>
    <!--- start smart phone and tablet ----------------------------------->
    <center>
        <div class="begineer-one">

            <label>تسجيل الدخول او الاشتراك</label>

        </div>
        <div class="order-alize">

            <div class="add-ten">
                <div class="add-nine">
                    <p>دخول الاعضاء</p>

                </div>
                <div class="add-nine">

                    <p>دخول الموظفين</p>
                </div>
                <div class="add-nine">
                    <p>دخول الادمن</p>

                </div>

            </div>
            <div class="add-onex">
                <input type="text" placeholder="ادخل الهاتف الجوال - الايميل" autofocus="on">

            </div>
            <div class="add-onex">
                <input type="password" placeholder="كلمه المرور">

            </div>
            <div class="add-onex">
                <input type="submit" value="تسجيل الدخول">

            </div>
            <div class="add-onex">
                <input type="button" value="سجل الان">

            </div>
            <div class="add-onex">
                <a href="#">هل نسيت كلمه المرور</a>

            </div>
            <div class="clear"></div>
        </div>
    </center>
    <!--- end smart phone and tablet ----------------------------------->

    <!-------------------------------------------------------------->
    <div class="app-two">
        <center>
            <button type="button">دخول الموظفين</button>
            <button type="button">دخول موظفي الوكلات</button>
            <button type="button">دخول موظفي قطاع الاعمال</button>
            <button type="button">تسجيل الوكالات</button>
            <button type="button">تسجيل الشركات</button>
            <button type="button">احجز رحله</button>
            <button type="button">اداره الحجز</button>
            <button type="button">اصدار بطاقه الصعود</button>
        </center>


    </div>


@endsection
