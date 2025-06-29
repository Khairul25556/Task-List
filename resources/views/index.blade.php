<div>
    <b>Hello I'm a blade template !</b>
</div>

{{--
If $name exists and is not null, it will display the content.
If $name is not defined or is null, Blade will skip the block.
--}}

@isset($name)
    <div>
        <b>This is {{$name}}</b>
    </div>
@endisset

{{-- test --}}

{{-- @isset($websiteName)
<div>
    <h1>Welcome to <a href="https://www.youtube.com/watch?v=CaAmJXW9wEg&list=RDCaAmJXW9wEg&start_radio=1">{{$websiteName}}</a></h1>
</div>
@endisset --}}