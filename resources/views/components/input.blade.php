<div class="w-full flex justify-center flex-col space-y-2">
    <label for="{{$id}}">{{$label}}</label>
    <input
    type="{{$type}}"
    id="{{$id}}"
    name="{{$name}}"
    value="{{old($name, $value)}}"
    class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
</div>
