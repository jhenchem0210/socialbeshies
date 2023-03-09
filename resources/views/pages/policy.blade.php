<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                {!! $policy !!}
            </div>
        </div>
    </div>

    <div id="footer" class="py-4 text-gray-600 text-sm text-center border-t">
					<a href="/page/about">About</a>
    				<a href="/page/contact">Contact</a>
    				<a href="/page/policy">Privacy and Policy</a>
    				<a href="/page/terms">Help</a>
					
					<img src="../images/logo1.png"  class="logoletter"/>
                    <div class="py-4 text-gray-600 text-sm text-center border-t">
					&copy; Copyright © www.socialbeshies.com
						<br>2023 All Rights Reserved.</p>
				</div>
            </div>
</x-guest-layout>
