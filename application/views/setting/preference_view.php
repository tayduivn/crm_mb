<!-- Table Styles Header -->
<ul class="breadcrumb breadcrumb-top">
    <li>@Setting@</li>
    <li>@Preference@</li>
    <li class="pull-right none-breakcrumb">
        <a role="button" href="javascript:void(0)" class="btn btn-sm" data-bind="click: save"><b>@Save@</b></a>
    </li>
</ul>
<!-- END Table Styles Header -->
<div class="container-fluid" style="height: calc(100vh - 130px)">
	<div class="row" style="margin: 0 10px">
		<h4 class="fieldset-legend" style="margin: 0 0 20px"><span style="font-weight: 500; line-height: 1">@MY PROFILE@</span></h4>
	</div>
	<div class="row" style="margin: 10px 30px 0 60px">
		<form class="form-horizontal">
			<div class="col-md-6" style="border-right: 1px solid lightgray">
				<div class="form-group">
			        <label class="control-label col-sm-4">@Extension@</label>
			        <div class="col-sm-8">
			        	<span data-bind="text: item.extension" style="vertical-align: -6px"></span>
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Avatar@ <br><br><a class="k-button" data-bind="click: defaultAvatar">@Default@</a></label>
			        <div class="col-sm-3" style="padding-top: 5px">
			        	<img src="<?= STEL_PATH ?>img/avatarwf4xs@2x.png" data-bind="invisible: item.avatar, click: uploadAvatar" class="preview-avatar img-circle">
			        	<img data-bind="attr: {src: item.avatar}, visible: item.avatar, click: uploadAvatar" class="preview-avatar img-circle">
			        </div>
			        <div class="col-sm-5" style="padding-top: 5px; display: none">
			        	<input name="file" type="file" id="upload-avatar"
	                   data-role="upload"
	                   data-multiple="false"
	                   data-async="{ saveUrl: 'api/v1/upload/avatar/agent', autoUpload: true }"
	                   data-bind="events: { success: uploadSuccessAvatar }">
			        </div>
			    </div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
			        <label class="control-label col-sm-4">@Agent name@</label>
			        <div class="col-sm-8">
			        	<span data-bind="text: item.agentname" style="vertical-align: -6px"></span>
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Email@</label>
			        <div class="col-sm-8">
			        	<span data-bind="text: item.email" style="vertical-align: -6px"></span>
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Phone@</label>
			        <div class="col-sm-8">
			        	<span data-bind="text: item.phone" style="vertical-align: -6px"></span>
			        </div>
			    </div>
			</div>
		</form>
	</div>
	<div class="row" style="margin: 0 10px">
		<h4 class="fieldset-legend" style="margin: 0 0 20px"><span style="font-weight: 500; line-height: 1">@CUSTOMIZE MY PREFERENCE@</span></h4>
	</div>
	<div class="row" style="margin: 10px 30px 0 60px">
		<form class="form-horizontal">
			<div class="col-md-6" style="border-right: 1px solid lightgray">
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Theme@</label>
			        <div class="col-sm-8">
			        	<input data-role="dropdownlist"
						data-text-field="text"
						data-value-field="value"
	                    data-value-primitive="true"                 
	                    data-bind="value: item.theme, source: themeOption, events: {change: themeChange}" style="width: 100%">
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Page Preload View@</label>
			        <div class="col-sm-8">
			        	<label class="switch switch-primary">
			        		<input type="checkbox" data-bind="checked: item.page_preloader"><span></span>
			        	</label>
			        </div>
			    </div>
			</div>
			<div class="col-md-6">
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Language@</label>
			        <div class="col-sm-8">
			        	<input data-role="dropdownlist"
						data-text-field="text"
						data-value-field="value"
	                    data-value-primitive="true"                 
	                    data-bind="value: item.language, source: languageOption" style="width: 100%">
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="control-label col-sm-4">@Ringtone@</label>
			        <div class="col-sm-6">
			        	<input data-role="dropdownlist" name="ringtone"
						data-text-field="name"
						data-value-field="filepath"
	                    data-value-primitive="true"                 
	                    data-bind="value: item.ringtone, source: ringtoneOption, events: {change: changeRingtone}" style="width: 100%">
			        </div>
			        <div class="col-sm-2">
			        	<a class="k-button" data-bind="click: uploadFile">@Upload@</a>
			        </div>
			    </div>
			    <div class="form-group" data-bind="visible: visibleUpload">
			        <label class="control-label col-sm-4"></label>
			        <div class="col-sm-8">
			        	<input name="file" type="file" id="upload-ringtone"
	                   data-role="upload"
	                   data-multiple="false"
	                   data-async="{ saveUrl: '/unknown', autoUpload: true }"
	                   data-bind="events: { select: uploadSelect, upload: uploadEvent , success: uploadSuccess }">
			        </div>
			    </div>
			</div>
		</form>
	</div>
</div>
<style>
	.preview-avatar {
		height: 70px;
		border: 2px solid lightgray;
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	window.onload = async function() {
		var item = await $.get(ENV.vApi + "preference/detail/" + ENV.extension);
		item.extension = ENV.extension;
		item.agentname = ENV.agentname;
		item.ringtone = (item.ringtone || '').toString();
		kendo.bind($("#page-content"), kendo.observable({
			item: item,
			themeOption: [
				{text: "Nam Á Bank", value: "namabank"},
				{text: "Default", value: "default"}, 
				{text: "Night", value: "night"},
				{text: "Amethyst", value: "amethyst"},
				{text: "Modern", value: "modern"},
				{text: "Autumn", value: "autumn"},
				{text: "Flatie", value: "flatie"},
				{text: "Spring", value: "spring"},
				{text: "Fancy", value: "fancy"},
				{text: "Fire", value: "fire"},
				{text: "Coral", value: "coral"},
				{text: "Lake", value: "lake"},
				{text: "Forest", value: "forest"},
				{text: "Waterlily", value: "waterlily"},
				{text: "Emerald", value: "emerald"},
				{text: "Blackberry", value: "blackberry"},
			],
			themeChange: function(e) {
				var value = e.sender.value(),
					path = "<?= PROUI_PATH . 'css/themes/' ?>" + value + ".css";
				$("#theme-link").attr("href", path);
			},
			languageOption: [
				{text: "English", value: "eng"}, 
				{text: "Vietnam", value: "vie"}
			],
			ringtoneOption: new kendo.data.DataSource({
				transport: {
					read: ENV.vApi + "preference/ringtone"
				},
				schema: {
					data: "data",
					parse: function(response) {
						response.data.unshift({name: "None", filepath: ""});
						return response;
					}
				}
			}),
			changeRingtone: function(e) {
				var value = e.sender.value();
				if(value) {
					playNotification.show(`<span>${e.sender.text()}</span><audio autoplay>
		              <source src="${value}" type="audio/mpeg">
		            Your browser does not support the audio element.
		            </audio>`, "info");
				}
			},
			ringtoneName: "",
			uploadSelect: function(e) {
				swal({
				  text: 'Name your ringtone.',
				  content: "input",
				})
				.then(name => {
				  if (!name) throw null;
				  else this.set("ringtoneName", name);
				  return;
				})
			},
			uploadFile() {
				$("#upload-ringtone").click();
			},
			uploadEvent: function(e) {
				e.sender.options.async.saveUrl = ENV.vApi + "preference/upload_ringtone?name=" + encodeURIComponent(this.get("ringtoneName"));
			},
			uploadSuccess: function(e) {
				notification.show(e.response.message, e.response.status ? "success" : "error");
				this.set("visibleUpload", false);
  				e.sender.clearAllFiles();
  				this.ringtoneOption.read().then(() => {
      				if(e.response.filepath) {
      					this.set("item.ringtone", e.response.filepath);
      					$("input[name='ringtone']").trigger("change");
      				}
  				})
			},
			uploadAvatar: function() {
				$("#upload-avatar").click();
			},
			uploadSuccessAvatar: function(e) {
				notification.show(e.response.message, e.response.status ? "success" : "error");
  				e.sender.clearAllFiles();
  				if(e.response.filepath) {
  					this.set("item.avatar", e.response.filepath);
  				}
			},
			defaultAvatar: function(e) {
				this.set("item.avatar", "");
			},
			save: function() {
				var data = this.item.toJSON();
				$.ajax({
					url: ENV.vApi + "preference/update/" + ENV.extension,
					type: "POST",
					data: data,
					success: function() {
						syncDataSource();
						location.reload();
					},
					error: errorDataSource
				})
			}
		}));
	}
</script>