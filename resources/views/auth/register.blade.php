@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">


<section id="contact-form" class="contact-form-3">
    <div class="w-container">
      <h2>Registration Form</h2>
      <p>This form uses grid for its layout. Adjust and reorganize the <strong>divs </strong>inside the <strong>Form Grid</strong> to fit 1 or 2 grid columns as needed.</p>
      <div id="formInstructions" class="small-text"><em>Fields marked with an asterisk (*) are required.</em></div>
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
          <div class="contact-form-grid-3">
            <div id="w-node-_778ff78e-0839-7bb0-9b1b-ffbd681a1707-a4cbe6b9"><label for="First-Name" id="contact-first-name">First name *</label><input type="text" class="w-input" maxlength="256" name="First-Name" data-name="First Name" id="First-Name" required=""></div>
            <div id="w-node-_778ff78e-0839-7bb0-9b1b-ffbd681a170b-a4cbe6b9"><label for="Last-Name" id="contact-last-name">Last name *</label><input type="text" class="w-input" maxlength="256" name="Last-Name" data-name="Last Name" id="Last-Name" required=""></div>
            <div id="w-node-_778ff78e-0839-7bb0-9b1b-ffbd681a170f-a4cbe6b9"><label for="Email" id="contact-email">Email *</label><input type="email" class="w-input" maxlength="256" name="Email" data-name="Email" id="Email" required=""></div>
            <div id="w-node-_778ff78e-0839-7bb0-9b1b-ffbd681a1713-a4cbe6b9"><label for="Contact-Phone-Number" id="contact-phone">Phone number</label><input type="tel" class="w-input" maxlength="256" name="Contact-Phone-Number" data-name="Contact Phone Number" id="Contact-Phone-Number"></div>
            <div id="w-node-_778ff78e-0839-7bb0-9b1b-ffbd681a1717-a4cbe6b9"><label for="Message" id="contact-message">Address</label><textarea data-name="Message" maxlength="5000" id="Message" name="Message" class="w-input"></textarea></div>
            <div>
              <div><label>GENDER *</label></div><select id="Gender" name="Gender" data-name="Gender" required="" class="w-select">
                <option value="">Select one...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div><label>VIP SERVICES</label><label class="w-checkbox"><input type="checkbox" id="VIP" name="VIP" data-name="VIP" class="w-checkbox-input"><span for="VIP" class="w-form-label">Yes</span></label></div>
            <div><label>PLACE OF BIRTH *</label><input type="text" class="w-input" maxlength="256" name="field" data-name="Field" placeholder="Example Text" id="field" required=""></div>
            <div><label for="dob">DATE OF BIRTH *</label><input type="text" class="w-input" maxlength="256" name="dob" data-name="dob" placeholder="Example Text" id="dob" required=""></div>
            <div><label>PASSWORD *</label><input type="password" class="w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="Example Text" id="field-2" required=""></div>
            <div><label>Retype PASSWORD*</label><input type="password" class="w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Example Text" id="field-3" required=""></div>
          </div><input type="submit" value="Register" data-wait="Please wait..." class="w-button">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </section>


</div>
</div>




@endsection
