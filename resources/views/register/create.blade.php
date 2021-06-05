@extends ('layout')

@section ('content')

<body>
    <section class="hero is-warning">
        <div class="hero-body">
          <p class="title">
              Registration page
          </p>
          <p class="subtitle">
            This is a page to register yourself for the Marathon
          </p>
        </div>
    </section>
    <section class="section">
      <div class="container ">
        <div class="columns is-centered is-vcentered is-mobile">
          <div class="column is-5"> 
            <form method="POST" action="{{url('register/create')}}" class="box">

            @csrf
            
            <div class="card-content">
              <div class="content block">
              <div class="field">
            
                <div class="field-body">

                  <div class="field">
                    <label class="label">Name</label>
                    <p class="control is-expanded has-icons-left">
                      <input name="name" class="input" type="text" placeholder="John" value="{{ old('name') ?? $model->name ?? '' }}">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    @if ($errors->has('name'))
                      <span class="help is-danger">❗️ {{ $errors->first('name') }}</span>
                      @else
                      <span class="help is-info">Requierd field</span>
                    @endif
                    </p>
                  </div>

                  <div class="field">
                    <label class="label">Surname</label>
                    <p class="control is-expanded has-icons-left has-icons-right">
                      <input name="surname" class="input" type="surname" placeholder="Smith" value="{{ old('surname') ?? $model->surname ?? '' }}">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    @if ($errors->has('surname'))
                      <span class="help is-danger">❗️ {{ $errors->first('surname') }}</span>
                      @else
                      <span class="help is-info">Requierd field</span>
                    @endif
                    </p>
                  </div>
                </div>
              </div>

              <div class="field">
              <label class="label">Phone number</label>
                <div class="field-body">
                  <div class="field has-addons">
                  <p class="control">
                    <a class="button is-static">
                      +371
                    </a>
                  </p>
                  <p class="control is-expanded">
                    <input name="tel" class="input" type="number" placeholder="26745633" value="{{ old('tel') ?? $model->tel ?? '' }}">
                    @if ($errors->has('tel'))
                      <span class="help is-danger">❗️ {{ $errors->first('tel') }}</span>
                      @else
                      <span class="help is-info">Requierd field</span>
                    @endif
                  </p>
                  </div>
                </div>
              </div>
                                              {{-- Here are all the form fields --}}
              <div class="field">
                <label class="label">Email</label>
                <div class="control">
                  <input name="email" class="input @error('Email') is-danger @enderror"
                      type="text" placeholder="email@example.com" value="{{ old('email') ?? $model->email ?? '' }}">
                  @if ($errors->has('email'))
                    <span class="help is-danger">❗️ {{ $errors->first('email') }}</span>
                    @else
                      <span class="help is-info">Requierd field</span>
                  @endif
                </div>
              </div>
                                              {{-- Here are all the form fields --}}
              <div class="field">
                <label class="label">Password</label>
                <div class="control">
                  <input name="password" class="input @error('Password') is-danger @enderror"
                        type="password" placeholder="Password here">
                  @if ($errors->has('password'))
                    <span class="help is-danger">❗️ {{ $errors->first('password') }}</span>
                    @else
                      <span class="help is-info">Requierd field</span>
                  @endif
                </div>
              </div>

              <div class="field">
              <label class="label">Distance</label>
                <p class="control has-icons-left">
                <span class="select">
                  <select name='distance'>
                    <option>5km</option>
                    <option>21km</option>
                    <option>42km</option>
                  </select>
                </span>
                <span class="icon is-small is-left">
                  <i class="fas fa-globe"></i>
                </span>
                </p>
              </div>

              <div class="field">
                <div class="control">
                <label class="checkbox">
                  <input type="checkbox" name='terms'>
                    I agree to the <a href="https://www.pictureofhotdog.com/home-margot">terms and conditions</a>
                  </label>
                  @if ($errors->has('terms'))
                    <span class="help is-danger">❗️ {{ $errors->first('terms') }}</span>
                  @endif
                </div>
              </div>

              </div>

              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-warning">Submit</button>
                </div>
                <div class="control">
                  <a type="button" href="/register" class="button is-light">Cancel</a>
                </div>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</body>

@endsection
