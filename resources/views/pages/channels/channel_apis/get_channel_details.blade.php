@include('components.alert.token_info')

<h3 class="text-center">Required Parameters</h3>
<form id="apiParams" class="needs-validation" novalidate>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <input name="channel_id" type="text" required id="typeText" class="form-control btn-success"/>
            <label class="form-label" for="typeText">Channel ID*</label>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <input name="bot_token" type="text" required id="typeText" class="form-control btn-success"/>
            <label  class="form-label" for="typeText">Bot Token* </label>

        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div style="text-align: center;">
        <button   type="button" class="text-center btn btn-success "  onclick="api('getChannelDetails')"><span class="spinner-border spinner-border-sm loader"  role="status" aria-hidden="true"></span> Execute
        </button>
    </div>
</form>
@include('components.console.console')
