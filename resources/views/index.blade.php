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
