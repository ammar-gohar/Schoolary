<x-page title="modules.students.edit" module="students" show-index-button="true">

    <x-success-message :status="$status" module="students" operation="update" />

    <!--begin::Form-->
    <form wire:submit='update()'>
        @csrf
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Row-->
            <div class="row g-3">
                <!--begin::Col-->
                <x-form-input name="first_name" wire_model="form.first_name" span="4" />
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="middle_name" wire_model="form.middle_name" span="4" />
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="last_name" wire_model="form.last_name" span="4" />
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="national_id" wire_model="form.national_id" dir="ltr"/>
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="phone" wire_model="form.phone" dir="ltr"/>
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="email" wire_model="form.email" dir="ltr"/>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">@lang('forms.gender')</label>
                    <div class="d-flex input-group justify-content-evenly">
                        <div class="d-flex">
                            <input type="radio" name="gender" id="genderM" class="me-2 form-check-input" value="m" {{ old('gender') == 'm' ? 'checked' : '' }} wire:model.live='form.gender'>
                            <label for="genderM" class="form-label form-check-label">@lang('forms.male')</label>
                        </div>
                        <div class="d-flex">
                            <input type="radio" name="gender" id="genderF" value="f" class="me-2 form-check-input" {{ old('gender') == 'f' ? 'checked' : '' }} wire:model.live='form.gender'>
                            <label for="genderF" class="form-label form-check-label">@lang('forms.female')</label>
                        </div>
                    </div>
                    @error('form.gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <label for="level" class="form-label">@lang('forms.level')</label>
                    <div class="input-group">
                        <select
                            name="level"
                            id="level"
                            class="form-select @error('level') is-invalid @enderror"
                            wire:model='level'
                            required>
                            <option value="freshman" {{ $level == 'freshman' ? 'selected' : '' }}>Freshman</option>
                            <option value="junior" {{ $level == 'junior' ? 'selected' : '' }}>Junior</option>
                            <option value="senior-1" {{ $level == 'senior-1' ? 'selected' : '' }}>Senior-1</option>
                            <option value="senior-2" {{ $level == 'senior-2' ? 'selected' : '' }}>Senior-2</option>
                        </select>
                    </div>
                    @error('form.level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="gpa" type="number" wire_model="gpa" dir="ltr" min="0" max="4" step="0.01" />
                <!--end::Col-->
                <!--begin::Col-->
                <x-form-input name="earned_credits" type="number" wire_model="earned_credits" dir="ltr" min="0" max="180" />
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="mt-3 card-footer">
            <button type="submit" class="btn btn-dark" type="submit">@lang('general.edit')</button>
        </div>
        <!--end::Footer-->
    </form>
    <!--end::Form-->

</x-page>
