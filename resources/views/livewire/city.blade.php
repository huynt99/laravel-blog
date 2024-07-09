<div class="form-row">
    <div class="col-md-6 form-group">
        <select class="form-control custom-select mt-15" name="country_id">
            <option selected value="">{{__('values.selected_country')}}</option>
            <option value="{{$country->country_id}}">{{$country->en_short_name}}</option>
        </select>
        @if($errors->has('country'))<span class="error">{{ $errors->first('country') }}</span>@endif
    </div>

    <div class="col-md-6 form-group">
        <select class="form-control custom-select mt-15" name="city_id">
            <option selected value="">{{__('values.selected_city')}}</option>
            @foreach($cities as $city)
                <option value="{{$city->slug}}">{{$city->name_with_type}}</option>
            @endforeach
        </select>
        @if($errors->has('city'))<span class="error">{{ $errors->first('city') }}</span>@endif
    </div>

</div>
