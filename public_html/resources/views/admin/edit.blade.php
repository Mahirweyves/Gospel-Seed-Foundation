<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="w-full justify-center mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <div class="container px-4">
            <div class="card mt-4">
            <h1 class="card-header bg-secondary">Edit user
                <a href="{{ url('allusers') }}" class="btn btn-danger float-end">Back</a>
            </h1>
            
            <div class="card-body">
        <x-guest-layout>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('edit',$data->id) }}">
            @csrf
            
            
            <div>
                <x-jet-label class="text-white" for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$data->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$data->email}}" required />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="phone_number" value="{{ __('Phone_number') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="number" name="phone" value="{{$data->phone_number}}" required />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" value="{{$data->password}}" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label class="text-white" for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-center mt-4">
                

                <x-jet-button class="ml-4 bg-success">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            </div>
            </div>
            </div>
        </form>
</x-guest-layout>
</div>












        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>