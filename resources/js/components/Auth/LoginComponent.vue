<template>
  <div> 
    <loginHeader />
    <div class="col-md-6 m-auto pb-2">
    <div class="shadow">
        <div class="form-horizontal my-5 px-5" id="login-form">
            <div class="login-title text-center">
                <h2 class="text-center font-weight-bold mb-4">Login</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile" class="text-uppercase">Login-id</label>
                        <input type="text" class="form-control rounded-0 mobile emptyValidate" id="mobile"
                            name="fname" aria-describedby="fname" placeholder="Enter 10 Digit Mobile Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pass" class="text-uppercase">Password</label>
                        <input type="password" class="form-control rounded-0 pass emptyValidate" id="pass"
                            name="fname" aria-describedby="fname" placeholder="Enter Your Password">
                    </div>
                </div>
            </div>
            <div class="group text-center mb-0">
                <button class="btn stbutton submit">Submit</button>
                <i class="fa fa-spinner fa-spin" aria-hidden="true" style="display: none;"></i>
            </div>
            <div class="col-sm-12 text-center mt-3">
                <div class="contact alert" style="display: none;"></div>
            </div>
           <div class="login-footer" style="">
                <div class="">
                     <router-link  to="/forgot-password" exact>Reset Password</router-link>
                </div>
                <div class="mt-1">
                    Don't Have An Account? <router-link  to="/register" exact>Register</router-link>
                </div>
            </div> 
        </div>
    </div>
</div></div>
</template>

<script>

import registar from './RegistrationComponent.vue'

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

