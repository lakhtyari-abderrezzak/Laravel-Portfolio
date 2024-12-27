<div class="form">
    <div class="content">
        <h2>{{ __('global.contact.title') }}</h2>

        @if ($successMessage)
            <div class="text-green z-index">
                {{ $successMessage }}
            </div>
        @endif
        <form wire:submit.prevent='submit'>      
            <input class="input  @error('name') 'focus:outline-solid focus-outline-red-500' @enderror" type="text" placeholder="{{ __('global.contact.name') }}" wire:model="name" />
            @error('name')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <input class="input  @error('email') 'focus:outline-solid focus-outline-red-500' @enderror" type="email" placeholder="{{ __('global.contact.email') }}" wire:model="email" />
            @error('email')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <input class="input" type="text" placeholder="{{ __('global.contact.number') }}" wire:model="phone" />
    
            <textarea class="input @error('message') 'focus:outline-solid focus-outline-red-500' @enderror" placeholder="{{ __('global.contact.message') }} " wire:model="message" ></textarea>
            @error('message')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <button type="submit">{{ __('global.contact.submit') }}</button>
        </form>
    </div>
</div>