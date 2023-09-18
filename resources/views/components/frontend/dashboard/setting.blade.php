
  <div>
    <div class="container">
      <div class="py-12 border-b border-gray-100">
        <h2 class="text-2xl text-gray-900 font-display font-semibold mb-[18px]">
          Basic Setting
        </h2>
        <form class="flex lg:flex-row flex-col gap-[56px]">
          <div class="lg:w-1/2 w-full">
            <div class="flex flex-col sm:flex-row justify-start items-center gap-6 bg-gray-50 p-8 rounded-md">
              <label
                class="relative inline-flex cursor-pointer min-w-[166px] w-[166px] h-[166px] min-h-[166px] rounded-full">
                <input type="file" @change="onFileChange" hidden accept="image/*" />
                <div
                  class="absolute border-2 border-dashed border-gray-100 top-0 right-0 bottom-0 left-0 w-full h-full rounded-full flex justify-center items-center">
                  <div class="">
                    <upload-profile class="mb-3.5 mx-auto text-primary-500 w-[32px] h-[32px]" />
                    <p class="text-sm font-medium font-display text-gray-900">
                      Upload Picture
                    </p>
                  </div>
                </div>
                <img v-if="profilePicture" :src="profilePicture"
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full object-cover rounded-full"
                  alt="Profile Picture" />
              </label>
              <div class="w-full">
                <h4 class="text-base text-center sm:text-left mb-2 font-display font-medium text-gray-900">
                  Add Profile Picture
                </h4>
                <p class="text-sm text-center sm:text-left font-display text-gray-500">
                  Click on the circle to upload your picture or drag & drop on
                  the circle. 512x512px & Max 5 MB.
                </p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/2 w-full">
            <div class="mb-[18px]">
              <label for="name" class="flex w-full text-sm text-gray-900 mb-1.5">Full Name</label>
              <input-field :type="text" :id="name" />
            </div>
            <div class="mb-[18px]">
              <label for="dname" class="flex w-full text-sm text-gray-900 mb-1.5">Display Name</label>
              <input-field :type="text" :id="dname" />
            </div>
            <div class="mb-8">
              <label for="email" class="flex w-full text-sm text-gray-900 mb-1.5">Email/Phone Number</label>
              <input-field :type="email" :id="email" />
            </div>
            <div>
              <primary-button>
                <button-check />
                <span>Save changes</span>
              </primary-button>
            </div>
          </div>
        </form>
      </div>
      <div class="py-12 border-b border-gray-100">
        <h2 class="text-2xl text-gray-900 font-display font-semibold mb-[18px]">
          Profile Setting
        </h2>
        <form class="flex flex-col md:flex-row gap-[56px]">
          <div class="md:w-1/2 w-full">
            <div class="sm:p-8 sm:bg-gray-50 rounded-lg">
              <h3 class="text-lg font-display font-semibold text-gray-900 mb-[18px]">
                Contact Information
              </h3>
              <div class="mb-[18px] relative">
                <label for="url" class="flex w-full text-sm text-gray-900 mb-1.5">Website Link</label>
                <label for="url" class="absolute bottom-3 left-[18px]"><url-input /></label>
                <input-field :type="url" :id="url" :class="'pl-[54px]'" :placeholder="'Website link/url'" />
              </div>
              <div class="mb-[18px] relative">
                <label for="mail" class="flex w-full text-sm text-gray-900 mb-1.5">Email</label>
                <label for="mail" class="absolute bottom-3 left-[18px]"><mail-input /></label>
                <input-field :id="mail" :type="email" :class="'pl-[54px]'" :placeholder="'Email Address'" />
              </div>
              <div class="mb-[18px] relative">
                <label for="phone" class="flex w-full text-sm text-gray-900 mb-1.5">Phone Number</label>
                <label for="phone" class="absolute bottom-3 left-[18px]"><phone-input /></label>
                <input-field :type="number" :class="'pl-[54px]'" :id="phone" :placeholder="+91" />
              </div>
              <div class="mb-8 relative">
                <label for="whatsapp" class="flex w-full text-sm text-gray-900 mb-1.5">WhatsApp Number</label>
                <label for="whatsapp" class="absolute bottom-3 left-[18px]"><whatsapp-input /></label>
                <input-field :type="number" :class="'pl-[54px]'" :id="whatsapp" :placeholder="+91" />
              </div>
              <div>
                <primary-button>
                  <button-check />
                  <span>Save changes</span>
                </primary-button>
              </div>
            </div>
          </div>
          <div class="md:w-1/2 w-full">
            <div class="sm:p-8 sm:bg-gray-50 rounded-lg">
              <h3 class="text-lg font-display font-semibold text-gray-900 mb-2">
                Map Location
              </h3>
              <p class="text-sm text-gray-600 mb-[18px]">
                Click on the map location to set your current location.
              </p>
              <div class="overflow-hidden max-w-[548px] w-full h-[402px] rounded-md">
                <setting-map />
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="pt-12 sm:border-none border-t border-gray-100">
        <h2 class="text-2xl text-gray-900 font-display font-semibold mb-[18px]">
          Account Setting
        </h2>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:max-w-[424px] w-full">
            <div class="sm:p-8 sm:bg-gray-50 pt-4 sm:pt-8 rounded-lg">
              <h3 class="text-lg font-display font-semibold text-gray-900 mb-[18px]">
                Privacy Customization
              </h3>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check1" class="toggle-checkbox hidden" type="checkbox" checked />
                  <label for="check1"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check1" class="cursor-pointer select-none text-base text-gray-900">Anyone can visit my
                  profile</label>
              </div>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check2" class="toggle-checkbox hidden" type="checkbox" checked />
                  <label for="check2"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check2" class="cursor-pointer select-none text-base text-gray-900">Anyone can message
                  me</label>
              </div>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check3" class="toggle-checkbox hidden" type="checkbox" />
                  <label for="check3"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check3" class="cursor-pointer select-none text-base text-gray-900">Anyone can message via
                  Email</label>
              </div>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check4" class="toggle-checkbox hidden" type="checkbox" />
                  <label for="check4"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check4" class="cursor-pointer select-none text-base text-gray-900">Anyone can message via
                  Whatsapp</label>
              </div>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check5" class="toggle-checkbox hidden" type="checkbox" checked />
                  <label for="check5"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check5" class="cursor-pointer select-none text-base text-gray-900">Show my contact
                  information</label>
              </div>
              <div class="flex mb-3 gap-2 items-center">
                <div class="toggle">
                  <input id="check6" class="toggle-checkbox hidden" type="checkbox" />
                  <label for="check6"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check6" class="cursor-pointer select-none text-base text-gray-900">Show my reviews</label>
              </div>
              <div class="flex gap-2 items-center">
                <div class="toggle">
                  <input id="check7" class="toggle-checkbox hidden" type="checkbox" checked />
                  <label for="check7"
                    class="toggle-label relative border-2 border-gray-200 block w-8 h-5 rounded-full transition duration-150 ease-out"></label>
                </div>
                <label for="check7" class="cursor-pointer select-none text-base text-gray-900">Show my website
                  link</label>
              </div>
            </div>
          </div>
          <div class="max-w-[872px] w-full sm:border-none border-t border-gray-100">
            <div class="sm:p-8 sm:bg-gray-50 pt-4 sm:pt-8 rounded-lg">
              <h3 class="text-lg font-display font-semibold text-gray-900 mb-[18px]">
                Change Password
              </h3>
              <div class="mb-[18px] relative">
                <label for="curpassword" class="flex w-full text-sm text-gray-900 mb-1.5">Current Password</label>
                <input-field :type="showcurPassword ? 'text' : 'password'" :id="curpassword" :class="'flex w-full'" />
                <label for="curpassword" class="absolute bottom-3 right-[18px] cursor-pointer">
                  <span v-if="!showcurPassword" @click="showcurPassword = !showcurPassword">
                    <eye-off />
                  </span>
                  <span v-if="showcurPassword" @click="showcurPassword = !showcurPassword">
                    <eye-on />
                  </span>
                </label>
              </div>
              <div class="flex flex-col sm:flex-row gap-[18px] mb-8">
                <div class="w-full relative">
                  <label for="npassword" class="flex w-full text-sm text-gray-900 mb-1.5">New Password</label>
                  <input-field id="npassword" :type="shownPassword ? 'text' : 'password'" />
                  <label for="npassword" class="absolute bottom-3 right-[18px] cursor-pointer">
                    <span v-if="!shownPassword" @click="shownPassword = !shownPassword">
                      <eye-off />
                    </span>
                    <span v-if="shownPassword" @click="shownPassword = !shownPassword">
                      <eye-on />
                    </span>
                  </label>
                </div>
                <div class="w-full relative">
                  <label for="cpassword" class="flex w-full text-sm text-gray-900 mb-1.5">Confirm Password</label>
                  <input-field :type="showcPassword ? 'text' : 'password'" id="cpasword" />
                  <label for="cpassword" class="absolute bottom-3 right-[18px] cursor-pointer">
                    <span v-if="!showcPassword" @click="showcPassword = !showcPassword">
                      <eye-off />
                    </span>
                    <span v-if="showcPassword" @click="showcPassword = !showcPassword">
                      <eye-on />
                    </span>
                  </label>
                </div>
              </div>
              <div>
                <primary-button>
                  <button-check />
                  <span>Save changes</span>
                </primary-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- <script>
  import UploadProfile from "../Icons/Dashboard/UploadProfile.vue";
  import PrimaryButton from "../Button/PrimaryButton.vue";
  import ButtonCheck from "../Icons/Dashboard/ButtonCheck.vue";
  import UrlInput from "../Icons/Dashboard/UrlInput.vue";
  import MailInput from "../Icons/Dashboard/MailInput.vue";
  import PhoneInput from "../Icons/Dashboard/PhoneInput.vue";
  import WhatsappInput from "../Icons/Dashboard/WhatsappInput.vue";
  import SettingMap from "../Map/SettingMap.vue";
  import InputField from "../CustomInput/InputField.vue";
  import EyeOff from "../Icons/Dashboard/EyeOff.vue";
  import EyeOn from "../Icons/Dashboard/EyeOn.vue";
  import { ref } from "vue";

  export default {
    components: {
      UploadProfile,
      PrimaryButton,
      ButtonCheck,
      InputField,
      UrlInput,
      MailInput,
      PhoneInput,
      WhatsappInput,
      SettingMap,
      EyeOff,
      EyeOn
    },
    setup() {
      const profilePicture = ref(null);
      const showcurPassword = ref(false);
      const shownPassword = ref(false);
      const showcPassword = ref(false);
      const onFileChange = (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = (e) => {
          profilePicture.value = e.target.result;
        };

        reader.readAsDataURL(file);
      };

      return {
        profilePicture,
        onFileChange,
        showcurPassword,
        shownPassword,
        showcPassword
      };
    },
  };
</script> --}}
<style>
  .toggle-label:before {
    position: absolute;
    top: 4px;
    left: 4px;
    display: inline-block;
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 9999%;
    background-color: #b3bab1;
    transition: transform 0.15s cubic-bezier(0, 0, 0.2, 1);
    transform: translateX(0);
  }

  .toggle-checkbox:checked+.toggle-label:before {
    transform: translateX(12px);
    background-color: white;
  }

  .toggle-checkbox:checked+.toggle-label {
    background: #58b32b;
    border-color: #58b32b;
  }
</style>
