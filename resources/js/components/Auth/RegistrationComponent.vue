<template>
  <div>
    <loginHeader />
    <div class="col-lg-6 m-auto">
        <div class="shadow">
            <div class="form-horizontal my-5 px-5" id="regis-form">
                <div class="login-title text-center">
                    <h2 class="text-center font-weight-bold mb-2">Registration Form</h2>
                    <p class="text-danger text-center mb-4">* Fields Are mandatory</p>
                </div>
                 <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="mobile" class="text-uppercase">Mobile <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <input type="tel" class="form-control rounded-0 mobile emptyValidate" id="mobile"
                                name="mobile" maxlength="10" placeholder="Enter 10 Digit Mobile Number" 
                                 v-model="item.mobile">
                        </div>
                    </div>
                    <div class="col-md-3" id="sendotp">
                        <div class="form-group">
                            <p v-if="item.mobile?.length === 10" class="mt-4 text-center crsr_pntr" style="cursor: pointer;"><b><a @click="sendOTP">Send OTP</a> </b></p>
                        </div>
                    </div>
                    <div class="col-md-3" id="resendotp" style="display:none">
                        <div class="form-group">
                            <p class="mt-4 text-center crsr_pntr" id="resend-otp"><b>Resend OTP</b></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="counter text-center">
                            <p id="clockdiv" class="text-center"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9" id="enterotp" v-if="verifyShow">
                        <div class="form-group">
                            <label for="otp" class="text-uppercase">OTP <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <input type="tel" class="form-control rounded-0 emptyValidate" id="otp" name="mobile"
                                maxlength="4" placeholder="Enter OTP Send On Your Mobile" v-model="item.otp">
                        </div>
                    </div>
                    <div class="col-md-3" id="verifyotp" >
                        <div class="form-group">
                            <p v-if="item.otp?.length === 4"  class="mt-4 text-center crsr_pntr" style="cursor: pointer;"><b> <a @click="verifyOTP">Verify OTP</a> </b></p>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12">
                        <p id="mobileerror" class="text-danger text-center font-weight-bold"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" id="profile" >
                        <div class="form-group">
                            <label for="Name" class="text-uppercase">Name <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <input type="text" class="form-control rounded-0 name emptyValidate" id="Name" name="fname"
                                aria-describedby="fname" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="stucalss" class="text-uppercase">Class <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <select class="class form-control" id="stucalss">
                                <option value="">Your Class (Academic session of 2021-22)</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-uppercase">Email</label>
                            <input type="email" class="form-control rounded-0 email" id="email" name="email"
                                aria-describedby="email" placeholder="Enter Your Valid Email Id">
                        </div>
                        <div class="form-group">
                            <label for="drp_dwn_school" class="text-uppercase">School <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <select class="form-control " id="drp_dwn_school">
                                <option value="">Select School</option>
                            </select>
                        </div>
                        <div class="form-group schooldiv" style="display:none;">
                            <label for="school" class="text-uppercase">School Name <span class="text-danger"
                                    style="font-size: 14px;font-weight: bold;">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control " id="school"
                                    placeholder="Enter your school name" required="">
                            </div>
                        </div>
                        <div class="group text-center">
                            <p class="btn stbutton submit" id="register">Submit</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <p id="prflsuccess" class="text-success text-center font-weight-bold"></p>
                        <p id="prflerror" class="text-danger text-center font-weight-bold"></p>
                    </div>
                    <div class="col-12">
                        <div class="login-footer pb-5">
                            <div class="float-left">
                                Have An Account? <router-link  to="/login" exact>Login</router-link>
                                 <!-- <a href="index"><u>Login</u></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
    return {
        item:{
        mobile:'',
        otp:''
      },
      sendShow: false,
      verifyShow: false,
    };
  },
  props: {},

  methods: {

    sendOTP(){
        console.log(this.item.mobile);
        try {
        axios.post('/send-otp', this.item)
        .then(res => {
          this.verifyShow = true;
          console.log(res);
        })
      } catch (e) {
        console.log(e);
      }
    
    },

    verifyOTP(){
         console.log(this.item.mobile);
        try {
        axios.post('/verify-otp', this.item)
        .then(res => {
        //   this.verifyShow = true;
          console.log(res);
        })
      } catch (e) {
        console.log(e);
      }
    }
  },
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