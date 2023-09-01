<div class="w-[300px] sm:w-[380px] bg-white text-start max-h-[556px] overflow-y-auto scrollbar-hide rounded-lg border border-gray-100 absolute top-14 z-[99] left-1/2 -translate-x-1/2" @click.outside="showBell = false">
    <h2 class="p-6 pb-3 popup-title">Notifications <span x-show="!isBell" class="unread text-gray-500">(3 Unread
            messages)</span>

    </h2>
    <div>
        <div class="py-3">
            <ul>
                <li :class="[isUnread ? 'bg-warning-50 rounded-none' : 'bg-white']"
                    class="px-6 py-4 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center gap-3">
                        <!-- Picture -->
                        <div :class="[isBell ? 'w-8 h-8' : 'w-16 h-16 border-2 border-danger-500']"
                            class="rounded-full min-w-fit">
                            <img src="{{ asset('frontend/assets/images/img/inbox-01.png') }}" alt="Profile-pic"
                                class="rounded-full object-cover w-full h-full">
                        </div>
                        <!-- Message -->
                        <div class="space-y-1">
                            <p class="message text-gray-600">
                                <span class="text-blue-500">Ronald for</span> Portable Washing Machine, 11lbs capacity
                                Model
                                18NMFIAM
                                <span class="related text-gray-600"></span>
                            </p>
                            <p class="flex justify-between bottom-section">
                                <span>Ronald Richards</span>
                                <span>5s</span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
