<div>
    <button wire:click="clickChange">Click</button>
    {{$actionMessage}}
    <h1>Keydown Example</h1>
    <button wire:keydown.enter="keyPress">Press Enter Key To change</button>
    {{$keyPressed}}
    <h1>Form</h1>
    <form  wire:submit.prevent= "Submit">
    <label for="">Submit Button to change data</label>
    <button>Submit</button>
   <h1> {{$submitMessage}}</h1>
    </form>
</div>
