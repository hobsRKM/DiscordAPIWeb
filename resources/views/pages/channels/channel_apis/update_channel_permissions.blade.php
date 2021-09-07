@include('components.alert.token_info')

<h3 class="text-center">Required Parameters</h3>
<form id="apiParams" class="needs-validation" novalidate>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <input name="channel_id" type="text" required  class="form-control btn-success"/>
            <label class="form-label" for="typeText">Channel ID*</label>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="type"
                    id="inlineRadio1"
                    value="ROLE"
                    checked
                />
                <label class="form-check-label" for="inlineRadio1">ROLE</label>
            </div>

            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="type"
                    id="inlineRadio2"
                    value="MEMBER"
                />
                <label class="form-check-label" for="inlineRadio2">MEMBER</label>
            </div>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <input name="permission_id" type="text"  required  class="form-control btn-success"/>
            <label class="form-label" for="typeText">Permission ID (See API DOCS)*</label>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <input name="permission" type="text"  required  class="form-control btn-success"/>
            <label class="form-label" for="typeText">Permission (See API DOCS)*</label>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-outline col-md-4 mb-4 ">
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="perm_type"
                    id="inlineRadio1"
                    value="allow"
                    checked
                />
                <label class="form-check-label" for="inlineRadio1">Allow</label>
            </div>

            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="perm_type"
                    id="inlineRadio2"
                    value="deny"
                />
                <label class="form-check-label" for="inlineRadio2">Deny</label>
            </div


        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div style="text-align: center;">
        <button   type="button" class="text-center btn btn-success "  onclick="api('postUpdateChannelPermissions')"><span class="spinner-border spinner-border-sm loader"  role="status" aria-hidden="true"></span> Execute
        </button>
    </div>
</form>
@include('components.console.console')
