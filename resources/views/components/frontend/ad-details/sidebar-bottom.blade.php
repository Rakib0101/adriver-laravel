<div class="border border-gray-100 rounded-lg px-8 pb-8 pt-6">
    <h2 class="text-gray-900 text-xl mb-4 font-display font-semibold">
        Ad Information
    </h2>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <p class="text-sm text-gray-500 mb-0.5">Conditions:</p>
            <h4 class="text-gray-900 text-base font-medium">USED</h4>
        </div>
        <div>
            <p class="text-sm text-gray-500 mb-0.5">Brand:</p>
            <h4 class="text-gray-900 text-base font-medium">Microsoft</h4>
        </div>
        <div>
            <p class="text-sm text-gray-500 mb-0.5">Model:</p>
            <h4 class="text-gray-900 text-base font-medium">Surface 8 Pro</h4>
        </div>
        <div>
            <p class="text-sm text-gray-500 mb-0.5">Model Year:</p>
            <h4 class="text-gray-900 text-base font-medium">2021</h4>
        </div>
    </div>
    <hr class="my-6 border-gray-100" />
    <div>
        <p class="mb-4 text-gray-500 font-display text-sm font-semibold">
            Share on Social Media
        </p>
        <ul class="flex flex-wrap gap-2 items-center">
            <li>
                <button @click="copyUrl" class="copy-button inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <link-icon />
                </button>
            </li>
            <li>
                <a href="#" class="inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <facebook-icon />
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <twitter-icon />
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <insta-icon />
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <pinta-icon />
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-center items-center transition-all duration-300 w-11 h-11 rounded-md bg-primary-50 hover:bg-primary-100">
                    <whatsapp-icon />
                </a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-100" />
    <div>
        <a href="#" class="inline-flex gap-2.5 items-center text-base font-display font-medium text-warning-500">
            <alert-icon />
            <span>Report Ad</span>
        </a>
    </div>
</div>

{{-- <script>
    import LinkIcon from "../../Icons/SocialMedia/LinkIcon.vue";
    import FacebookIcon from "../../Icons/SocialMedia/FacebookIcon.vue";
    import TwitterIcon from "../../Icons/SocialMedia/TwitterIcon.vue";
    import InstaIcon from "../../Icons/SocialMedia/InstaIcon.vue";
    import PintaIcon from "../../Icons/SocialMedia/PintaIcon.vue";
    import WhatsappIcon from "../../Icons/SocialMedia/WhatsappIcon.vue";
    import AlertIcon from "../../Icons/AlertIcon.vue";
    import Clipboard from 'clipboard';

    export default {
        components: {
            LinkIcon,
            FacebookIcon,
            InstaIcon,
            PintaIcon,
            TwitterIcon,
            WhatsappIcon,
            AlertIcon,
        },
        methods: {
            copyUrl() {
                const clipboard = new Clipboard('.copy-button', {
                    text: () => window.location.href
                });

                clipboard.on('success', (e) => {
                    const message = 'URL copied: ' + e.text;
                    alert(message);
                    clipboard.destroy();
                });

                clipboard.on('error', (e) => {
                    console.error('Error copying URL:', e);
                    clipboard.destroy();
                });

                clipboard.onClick({
                    currentTarget: this.$el.querySelector('.copy-button')
                });
            }
        }
    };
</script> --}}
