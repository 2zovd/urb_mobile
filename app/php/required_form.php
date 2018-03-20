
<!--required information form section-->
<main class="required-form">

	<div class="settings-container settings-content">

		<span class="settings-title row-heading">Please fill in your profile info to continue using website.</span>
		<p class="settings-drop_header-text">All fields with <span class="text-star">*</span> are required. </p>

		<div class="settings-drop_form-row">
			<div class="settings_title-holder">
				<label class="settings-title">First name <span class="text-star">*</span></label>
			</div>
			<input class="settings_form-field" type="text" placeholder="Name">
			<span class="settings-error-message">This field is required</span>
		</div>

		<div class="settings-drop_form-row">
			<div class="settings_title-holder">
				<label class="settings-title">Birthday <span class="text-star">*</span></label>
			</div>
			<div class="settings_select-row">
				<div class="select-cover birth_form-select">
					<select id="#">
						<option value="Day" disabled selected hidden>Day</option>
						<option value="10">10</option>
					</select>
				</div>

				<div class="select-cover birth_form-select">
					<select id="#">
						<option value="Month" disabled selected hidden>Month</option>
						<option value="09">09</option>
					</select>
				</div>

				<div class="select-cover birth_form-select">
					<select id="#">
						<option value="Year" disabled selected hidden>Year</option>
						<option value="1989">1989</option>
					</select>
				</div>

			</div>
			<span class="settings-error-message">This field is required</span>
		</div>

		<div class="settings-drop_form-row">
			<div class="settings_title-holder">
				<label class="settings-title">Country <span class="text-star">*</span></label>
			</div>
			<div class="settings_select-row">
				<div class="select-cover custom_form-select">
					<select id="#">
						<option value="Select country" disabled selected hidden>Select country</option>
						<option value="United States">United States</option>
					</select>
				</div>
				<span class="settings-error-message">This field is required</span>
			</div>
		</div>

		<button class="btn-save btn-shadow btn-red">Continue</button>
		<span class="settings-drop_content-message error">Changes are successfully saved.</span>	
	</div>
</main>
