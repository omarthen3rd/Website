<?php include('header.html'); ?>

<style type="text/css">

.btn-purple { 
  color: #FFFFFF; 
  background-color: #9B59B6; 
  border-color: #9B59B6; 
}

.btn-purple:hover, 
.btn-purple:focus, 
.btn-purple:active, 
.btn-purple.active, 
.open .dropdown-toggle.btn-purple { 
  color: #FFFFFF; 
  background-color: #874C9E; 
  border-color: #9B59B6; 
}

.btn-purple:active, 
.btn-purple.active, 
.open .dropdown-toggle.btn-purple { 
  background-image: none; 
}

.btn-purple.disabled, 
.btn-purple[disabled], 
fieldset[disabled] .btn-purple, 
.btn-purple.disabled:hover, 
.btn-purple[disabled]:hover, 
fieldset[disabled] .btn-purple:hover, 
.btn-purple.disabled:focus, 
.btn-purple[disabled]:focus, 
fieldset[disabled] .btn-purple:focus, 
.btn-purple.disabled:active, 
.btn-purple[disabled]:active, 
fieldset[disabled] .btn-purple:active, 
.btn-purple.disabled.active, 
.btn-purple[disabled].active, 
fieldset[disabled] .btn-purple.active { 
  background-color: #9B59B6; 
  border-color: #9B59B6; 
} 

.btn-purple .badge { 
  color: #9B59B6; 
  background-color: #FFFFFF; 
}

</style>

<div class="container">
    <div class="py-5 text-center">
      <a class="d-block mx-auto mb-4" href="#">
        <svg width="72px" height="72px" viewBox="0 0 500 500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 48.2 (47327) - http://www.bohemiancoding.com/sketch -->
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="logo" fill="#9B59B6">
              <g id="Combined-Shape">
                <path d="M427,309 L427,191 L427,160 L308,160 L308,192 L395,192 L395,234.5 L265,234.5 L265,184 L233,184 L233,234.5 L105,234.5 L105,192 L192,192 L192,160 L73,160 L73,191 L73,309 L73,341 L192,341 L192,309 L105,309 L105,266.5 L233,266.5 L233,315 L265,315 L265,266.5 L395,266.5 L395,309 L308,309 L308,341 L427,341 L427,309 Z M250,500 C111.928813,500 0,388.071187 0,250 C0,111.928813 111.928813,0 250,0 C388.071187,0 500,111.928813 500,250 C500,388.071187 388.071187,500 250,500 Z"></path>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <h2>Contact Us</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Contact Information</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="John" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Smith" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for contact.
            </div>
          </div>

          <h4 class="mb-3">Message</h4>
          <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." required></textarea>
            <div class="invalid-feedback">
              Please enter your message.
            </div>
          </div>
          <button class="btn btn-purple btn-lg btn-block" type="submit">Send Email</button>
        </form>
      </div>
    </div>
  </div>

<?php include('footer.html'); ?>