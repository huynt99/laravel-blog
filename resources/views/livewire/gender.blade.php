<div class="form-row">
    <div class="col-md-6 form-group">
        <select class="form-control custom-select mt-15" name="gender" wire:model="selectedGender">
            <option selected value="">{{__('values.selected_gender')}}</option>
            <option value="female">{{__('values.female')}}</option>
            <option value="male">{{__('values.male')}}</option>
        </select>
        @if($errors->has('gender'))<span class="error">{{ $errors->first('gender') }}</span>@endif
    </div>
</div>
