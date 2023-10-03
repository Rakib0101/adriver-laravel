<div>
    <div class="container">
        <div class="max-w-[872px] mx-auto pt-12 pb-[68px]">
            <div class="flex flex-col md:flex-row gap-6 justify-between md:items-center mb-8">
                <div class="w-full max-w-[464px]">
                    <h2 class="text-xl md:text-[40px] md:leading-[48px] mb-3 font-display font-semibold text-gray-900">
                        Ad Details
                    </h2>
                    <p class="text-base text-gray-600">
                        Vestibulum lacinia urna eu fringilla venenatis. Quisque sed leo,
                        imperdiet mi nec, elementum mi. Nam vitae molestie quam.
                    </p>
                </div>
                <div>
                    <div class="flex gap-3 mb-6 items-center max-w-[312px]">
                        <div>
                            <category-layer />
                        </div>
                        <div>
                            <div class="flex mb-1 gap-3 items-center">
                                <p class="text-xs leading-[100%] font-semibold font-display">
                                    Category
                                </p>
                                <button class="inline-flex items-center gap-1 text-xs text-primary-500">
                                    <change-plan />Edit
                                </button>
                            </div>
                            <p class="flex items-center text-sm text-gray-500 gap-1">
                                <span>Mobile</span>
                                <breadcrumb-arrow />
                                <span>SmartPhone</span>
                                <breadcrumb-arrow />
                                <span>Xaiomi</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center max-w-[312px]">
                        <div>
                            <tag-icon />
                        </div>
                        <div>
                            <div class="flex mb-1 gap-3 items-center">
                                <p class="text-xs leading-[100%] font-semibold font-display">
                                    Ad Type
                                </p>
                                <button class="inline-flex items-center gap-1 text-xs text-primary-500">
                                    <change-plan />Edit
                                </button>
                            </div>
                            <p class="text-sm text-gray-500">Want To Exchange</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-8">
                <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
                    Listing Information
                </h3>
                <div class="mb-[18px]">
                    <label for="ltitle" class="flex w-full text-sm text-gray-900 mb-1.5">Listing Title</label>
                    <x-frontend.custom-input.input type="text" placeholder="Ad tittle" />
                </div>
                <div class="mb-[18px]">
                    <label for="ltitle" class="flex w-full text-sm text-gray-900 mb-1.5">Tags/Keyword</label>
                    <input
                        class="flex w-full py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)]"
                        type="text" placeholder="tags 1, tag 2, tag 3" />
                </div>
                <div class="flex flex-col sm:flex-row gap-[18px]">
                    <div class="w-full">
                        <h4 class="text-sm text-gray-900 mb-3">Authentication</h4>
                        <div class="flex gap-3 justify-between">
                            <div class="flex w-full gap-3 items-center custom-radio">
                                <input type="radio" name="auth" id="original" />
                                <label for="original" class="cursor-pointer select-none flex w-full">Original</label>
                            </div>
                            <div class="flex w-full gap-3 items-center custom-radio">
                                <input type="radio" name="auth" id="refurbished" /><label for="refurbished"
                                    class="cursor-pointer select-none flex w-full">Refurbished</label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h4 class="text-sm text-gray-900 mb-3">Conditions</h4>
                        <div class="flex gap-3 justify-between">
                            <div class="flex w-full gap-3 items-center custom-radio">
                                <input type="radio" name="condition" id="used" /><label for="used"
                                    class="cursor-pointer select-none flex w-full">Used</label>
                            </div>
                            <div class="flex w-full gap-3 items-center custom-radio">
                                <input type="radio" name="condition" id="new" /><label for="new"
                                    class="cursor-pointer select-none flex w-full">New</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-8">
                <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
                    Pricing
                </h3>
                <div class="flex flex-col md:flex-row mb-[18px] gap-[18px]">
                    <div class="w-full">
                        <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Price
                            Type</label>
                        <div>
                            <select class="relative !w-full sorting-select select2" placeholder="Sort By :">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="category"
                            class="text-sm font-normal font-display mb-1.5 flex w-full">Currency</label>
                        <div>
                            <select class="relative !w-full sorting-select select2" placeholder="Sort By :">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="ltitle" class="flex w-full text-sm text-gray-900 mb-1.5">Price</label>
                    <input
                        class="flex w-full py-3 px-[18px] outline-none border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)]"
                        type="text" placeholder="Ad price..." />
                </div>
            </div>
            <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-8">
                <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
                    Listing Description
                </h3>
                <div>
                    <label for="description"
                        class="text-sm font-normal font-display mb-1.5 flex w-full">Description</label>
                    <description-editor />
                </div>
            </div>
            <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-8">
                <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
                    Custom Field
                </h3>
                <div class="flex flex-col md:flex-row mb-[18px] gap-[18px]">
                    <div class="w-full">
                        <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Custom Field
                            1</label>
                        <input type="text" placeholder="Custom field input field"
                            class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100" />
                    </div>
                    <div class="w-full">
                        <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Custom Field
                            2</label>
                        <input type="text" placeholder="Custom field input field"
                            class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-[18px]">
                    <div class="w-full">
                        <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Custom Field
                            3</label>
                        <div>
                            <select class="relative !w-full sorting-select select2" placeholder="Sort By :">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full relative">
                        <label for="icon-input"
                            class="text-sm font-normal font-display mb-1.5 flex w-full">Model</label>
                        <input id="icon-input" type="text" placeholder="Custom field left icon"
                            class="flex w-full pl-[54px] pr-3 py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100" />
                        <label for="icon-input" class="absolute bottom-3 left-[18px]"><search-lg /></label>
                    </div>
                </div>
            </div>
            <div>
                <label class="relative inline-flex cursor-pointer w-full xl:h-[596px] md:h-96 h-60 rounded-xl mb-6">
                    <input type="file" @change="onFileChange" hidden accept="image/*" multiple />
                    <div
                        class="absolute border-2 border-dashed border-gray-100 top-0 right-0 bottom-0 left-0 w-full h-full flex justify-center items-center">
                        <div class="flex flex-col items-center justify-center">
                            <upload-profile class="mb-3.5" />
                            <p class="text-lg mb-2 font-semibold font-display text-gray-900">
                                Upload Photo or
                                <span class="text-primary-500">Browse File</span>
                            </p>
                            <p class="max-w-[372px] text-center text-sm text-gray-600">
                                Add up to 5 images. Listing photo radio 4:3. Maximum width
                                size: 1600px and Maxium image size: 10 MB.
                            </p>
                        </div>
                    </div>
                </label>
                <div v-if="imgGallery" class="flex gap-3 items-center">
                    <div v-for="(img, i) in imgGallery" ref="image-list" :key="img"
                        class="inline-flex relative">
                        <img :src="img"
                            class="w-[124px] h-[92px] object-cover border border-gray-100 rounded"
                            alt="Profile Picture" />
                        <button @click="deleteImg(i)"
                            class="inline-flex -top-2.5 -right-2.5 bg-danger-100 justify-center items-center w-5 h-5 rounded-full absolute">
                            <remove-icon />
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-8 border-t border-gray-100">
                <div class="flex justify-between items-center">
                    <div @click="completePayStepOne">
                        <x-frontend.button.secondary-button>
                            <info-circle />
                            <span>Posting Guide</span>
                        </x-frontend.button.secondary-button>
                    </div>
                    <div @click="completePayStepTwo">
                        <x-frontend.button.primary-button>
                            <span>Post Ads</span>
                            <button-arrow />
                        </x-frontend.button.primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
  import CategoryLayer from "../../Icons/Dashboard/CategoryLayer.vue";
  import ChangePlan from "../../Icons/Dashboard/ChangePlan.vue";
  import BreadcrumbArrow from "../../Icons/BreadcrumbArrow.vue";
  import TagIcon from "../../Icons/Dashboard/TagIcon.vue";
  import Multiselect from "@vueform/multiselect";
  import "@vueform/multiselect/themes/default.css";
  import DescriptionEditor from "../../Editor/DescriptionEditor.vue";
  import SearchLg from "../../Icons/SearchLg.vue";
  import UploadProfile from "../../Icons/Dashboard/UploadProfile.vue";
  import RemoveIcon from "../../Icons/Dashboard/RemoveIcon.vue";
  import PrimaryButton from "../../Button/PrimaryButton.vue";
  import SecondaryButton from "../../Button/SecondaryButton.vue";
  import ButtonArrow from "../../Icons/ButtonArrow.vue";
  import InfoCircle from "../../Icons/Button/InfoCircle.vue";
  import InputField from "../../CustomInput/InputField.vue";
  import { ref } from "vue";

  export default {
    components: {
      CategoryLayer,
      ChangePlan,
      UploadProfile,
      BreadcrumbArrow,
      TagIcon,
      Multiselect,
      DescriptionEditor,
      SearchLg,
      RemoveIcon,
      PrimaryButton,
      SecondaryButton,
      ButtonArrow,
      InfoCircle,
      InputField,
    },
    setup() {
      const value = ref(null);
      const options = ref([
        { value: "option1", label: "Option 1" },
        { value: "option2", label: "Option 2" },
        { value: "option3", label: "Option 3" },
      ]);
      const imgGallery = ref([]);
      const onFileChange = (event) => {
        const media = event.target.files;
        for (let i = 0; i < media.length; i++) {
          const file = event.target.files[i];
          const reader = new FileReader();
          reader.onload = (e) => {
            imgGallery.value.push(e.target.result);
          };
          reader.readAsDataURL(file);
        }
      };
      console.log(imgGallery);
      return {
        imgGallery,
        onFileChange,
        options,
      };
    },
    methods: {
      deleteImg(i) {
        this.imgGallery.splice(i, 1);
      },
    },
  };
</script> --}}
<style>
    label.listing-type {
        align-items: start !important;
        gap: 0px;
    }

    .custom-checkbox input:checked+.listing-type {
        background: white;
    }
</style>
