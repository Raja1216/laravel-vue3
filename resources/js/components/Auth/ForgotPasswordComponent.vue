<template>
  <div>
    <loginHeader />
    <div class="m-auto col-lg-6">
    <div class="shadow">
        <div class="form-horizontal my-5 px-5" id="forget-pass">
            <div class="login-title text-center">
                <div class="login-title text-center">
                    <h2 class="text-center font-weight-bold mb-4">Forgot Password</h2>
                </div>
            </div>
            <div class="group mb-1" id="mobnum">
                <div class="form-group">
                    <label for="mobile" class="text-uppercase">Mobile</label>
                    <input type="text" class="form-control rounded-0 mobile emptyValidate" id="mobile" name="fname"
                        aria-describedby="fname" placeholder="Enter 10 Digit Mobile Number">
                </div>
            </div>
            <div id="mobotp" style="display: none;">
                <div class="form-group">
                    <label for="OTP" class="text-uppercase">OTP</label>
                    <input type="text" class="form-control rounded-0 otp emptyValidate" id="OTP" name="fname"
                        aria-describedby="fname" placeholder="Enter 4 Digit OTP Sent On Your Registered Mobile Number">
                </div>
                <div class="form-group">
                    <label for="Password" class="text-uppercase">Password</label>
                    <input type="password" class="form-control rounded-0 pass emptyValidate" id="Password" name="fname"
                        aria-describedby="fname" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <label for="Confirm_Password" class="text-uppercase">Confirm Password</label>
                    <input type="password" class="form-control rounded-0 confirm-pass emptyValidate" id="Confirm_Password"
                        name="fname" aria-describedby="fname" placeholder="Confirm Password">
                </div>
            </div>
            <div class="counter">
                <span id="clockdiv"></span>
            </div>
            <div class="group text-center" id="firstsubmit">
                <button class="btn stbutton submit sendotp" type="button">Submit</button>
            </div>
            <div class="row mt-3" id="secondsubmit" style="display: none;">
                <div class="col-md-6 text-center">
                    <button class="btn submit" type="button" id="resend-otp">Resend OTP</button>
                </div>
                <div class="col-md-6 text-center">
                    <button class="btn stbutton submit verify-otp" type="button">Verify OTP</button>
                </div>
            </div>
            <div class="login-footer pb-5">
                <div class="float-left">
                     <router-link  to="/register" exact>Register</router-link>
                </div>
                <div class="float-right">
                    <router-link  to="/login" exact>Login</router-link>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 text-center mt-3">
            <div class="contact alert" style="display: none;"></div>
        </div> -->

    </div>
</div>

  </div>
</template>

<script>

import loginHeader from '../Shared/LoginHeaderComponent.vue'
export default {

  components:
  {
    loginHeader
},
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped>
.stbutton{
  background: #f9cc5d;
  color:#002a38!important;
}
.stbutton:hover{
   background-color: #002a38;
    color: #f9cc5d!important;
    border: 1px solid #002a38;
}
</style>