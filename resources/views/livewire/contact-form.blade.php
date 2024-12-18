<div class="form">
    <div class="content">
        <h2>Contact me</h2>

        @if ($successMessage)
            <div class="text-green z-index">
                {{ $successMessage }}
            </div>
        @endif
        <form wire:submit.prevent='submit'>      
            <input class="input  @error('name') 'focus:outline-solid focus-outline-red-500' @enderror" type="text" placeholder="Your Name" wire:model="name" />
            @error('name')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <input class="input  @error('email') 'focus:outline-solid focus-outline-red-500' @enderror" type="email" placeholder="Your Email" wire:model="email" />
            @error('email')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <input class="input" type="text" placeholder="Your Phone" wire:model="phone" />
            
            <textarea class="input @error('message') 'focus:outline-solid focus-outline-red-500' @enderror " placeholder="Tell Us About Your Needs" wire:model="message"></textarea>
            @error('message')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
</div>