<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">Account Settings</h1>
    <form wire:submit.prevent="updateAccount">
    <!-- Grid Layout for Account Details -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
      
      <!-- Card for User Information -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">Account Name</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <div>{{ $user->name }}</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card for Email Information -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800 col-span-2">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#808080" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
            
          </div>
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">Email Address</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">{{ $user->email }}</h3>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card for Account Status -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 22h14" />
              <path d="M5 2h14" />
              <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
              <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
            </svg>
          </div>
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">Account Joined Date</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                {{ $user->created_at ? $user->created_at->format('F j, Y') : 'No date available' }}
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card forPass -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800 col-span-4">
        <div class="p-4 md:p-5 flex gap-x-4">
            <!-- Icon Section -->
            <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 22h14" />
                    <path d="M5 2h14" />
                    <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                    <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                </svg>
            </div>
            
            <!-- Title Section -->
            <div class="grow">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Password</p>
                </div>
            </div>
        </div>

    
        <!-- Password Change Form -->
        <!-- Password Change Form -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800 col-span-4">
                <div class="space-y-6 p-4 md:p-5">
                    <!-- Username -->
                    <div>
                        <label for="newUserName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Account Name</label>
                        <input type="text" wire:model="newUserName" id="newUserName" name="newUserName" class="mt-1 p-3 w-full border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('newUserName')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- New Password -->
                    <div>
                      <label for="newPassword" class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
                      <input type="password" wire:model="newPassword" id="newPassword" name="newPassword" class="mt-1 p-3 w-full border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                      @error('newPassword')
                      <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                      @enderror
                  </div>
              
                  <!-- Confirm New Password -->
                  <div>
                      <label for="newPasswordConfirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm New Password</label>
                      <input type="password" wire:model="newPasswordConfirmation" id="newPasswordConfirmation" name="newPasswordConfirmation" class="mt-1 p-3 w-full border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                      @error('newPasswordConfirmation')
                      <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                      @enderror
                  </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center mt-10">
                      <button 
                      class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
                      wire:click="updateAccount"
                      wire:loading.attr="disabled"
                      x-bind:disabled="$disableButton">
                          Update Account
                      </button>
                    </div>
                </div>
        </form>
    </div>
    

      
    </div>

    
    
</div>
