@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employer Registration Form</div>

                <div class="card-body">
                @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}  
                        </div><br />
                    @endif
                    <form method="POST" action="{{ route('employer.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Organization name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact Person name') }}</label>

                            <div class="col-md-6">
                                <input id="person_name" type="text" class="form-control @error('person_name') is-invalid @enderror" name="person_name" value="{{ old('person_name') }}" required autocomplete="cell" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cell') }}</label>

                            <div class="col-md-6">
                                <input id="cell" type="number" class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ old('cell') }}" required autocomplete="cell" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Which Category of job you are interested to post ') }}</label>

                            <div class="col-md-6">
                            
                                <select id="job_category" class="form-control @error('job_category') is-invalid @enderror" name="job_category" required autocomplete="job_category" autofocus>
                                    <option>Select Category</option>
                                    <option value="Virtual Executives Associate">Virtual Executives Associate</option>
                                    <option value="Virtual Marketing/Sales Associate">Virtual Marketing/Sales Associate</option>
                                    <option value="Virtual Health Advisor">Virtual Health Advisor</option>
                                    <option value="Virtual Digital Marketer">Virtual Digital Marketer</option>
                                    <option value="Virtual Content/Script/Feature Writer">Virtual Content/Script/Feature Writer</option>
                                    <option value="Virtual Digital Content Developer">Virtual Digital Content Developer</option>
                                    <option value="Virtual Admission Consultant">Virtual Admission Consultant</option>
                                    <option value="Virtual Customer Support Executive">Virtual Customer Support Executive</option>
                                    <option value="Video Editor">Video Editor</option>
                                    <option value="SEO Executive">SEO Executive</option>
                                    <option value="Virtual Accounts Associates">Virtual Accounts Associates</option>
                                    <option value="Virtual Research Associates">Virtual Research Associates</option>
                                    <option value="Virtual Graphics Designer">Virtual Graphics Designer</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Please mention at least 5 tasks to be performed') }}</label>

                            <div class="col-md-6">
                                <textarea id="task" type="text" class="form-control @error('task') is-invalid @enderror" name="task" value="{{ old('task') }}" required autocomplete="task" autofocus></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('How much salary you want to offer for virtual Position') }}</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('What Skills Do you prefer for the category?') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" class="form-check-input" name="skill[]" value="MS Office">MS Office<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Photoshop">Adobe Photoshop<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Illustrator">Adobe Illustrator<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="SEO">SEO<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Social Media Optimization">Social Media Optimization<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Website Development">Website Development<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Web Programing">Web Programing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Content Development">Content Development<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Report Writing">Report Writing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Data Entry (English/Bangla)">Data Entry (English/Bangla)<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Translator (English to Bangla or Bangla to English">Translator (English to Bangla or Bangla to English<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Premier for Video Editing">Adobe Premier for Video Editing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Accounting">Accounting<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Online Surveying">Online Surveying <br>
                                <input type="checkbox" class="form-check-input" >Others <input type="text" class="form-control" name="skill[]"><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Submit Organization Logo') }}</label>

                            <div class="col-md-6">
                                <input id="logo" type="file" class="form-control" name="logo" required autocomplete="logo">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
