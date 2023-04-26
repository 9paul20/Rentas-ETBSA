<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
            </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="#" method="POST">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <fieldset>
                            <legend class="sr-only">By Email</legend>
                            <div class="text-base font-medium text-gray-900" aria-hidden="true">By Email</div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="comments" name="comments" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">Comments</label>
                                        <p class="text-gray-500">Get notified when someones posts a comment on a
                                            posting.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="candidates" name="candidates" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                        <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="offers" name="offers" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="offers" class="font-medium text-gray-700">Offers</label>
                                        <p class="text-gray-500">Get notified when a candidate accepts or rejects an
                                            offer.</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="contents text-base font-medium text-gray-900">Push Notifications</legend>
                            <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input id="push-everything" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-green-600 focus:ring-green-500">
                                    <label for="push-everything"
                                        class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="push-email" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-green-600 focus:ring-green-500">
                                    <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Same
                                        as email</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="push-nothing" name="push-notifications" type="radio"
                                        class="h-4 w-4 border-gray-300 text-green-600 focus:ring-green-500">
                                    <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">No
                                        push notifications</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>