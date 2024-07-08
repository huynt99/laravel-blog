<div class="col-md-4 form-group">
    <label for="parent_id">{{__('values.parent')}}</label>
    <select class="form-control custom-select mt-15" name="parent_id" style="position: absolute; top: 20px; left: 0px;">
        <option selected value="">{{__('values.selected_parent')}}</option>
        @foreach($genealogy as $parent)
        <option value="{{$parent->id}}">{{$parent->name}}</option>
        @endforeach
    </select>
    @if($errors->has('parent_id'))<span class="error">{{ $errors->first('parent_id') }}</span>@endif
</div>
