<div class="flex flex-col space-y-4">
    <div class="form-control">
        <label for="name" class="label">@lang('Name')</label>
        <input id="name" type="text" wire:model="name" class="input input-bordered" />
    </div>

    <div class="form-control">
        <label for="secret" class="label">@lang('Secret')</label>
        <textarea id="secret" wire:model="value" class="textarea textarea-bordered w-full">
        </textarea>
    </div>

    <div class="form-control">
        <label for="validFor" class="label">@lang('Valid For')</label>
        <select class="select select-bordered" id="validFor" wire:model="validFor">
            <option value="1H">@lang('1 Hour')</option>
            <option value="8H">@lang('8 Hours')</option>
            <option value="1D">@lang('1 Day')</option>
            <option value="1W">@lang('1 Week')</option>
            <option value="2W">@lang('2 Weeks')</option>
            <option value="1M">@lang('1 Month')</option>
        </select>
    </div>

    <button wire:click="submit" class="btn btn-primary">@lang('Create')</button>
</div>
