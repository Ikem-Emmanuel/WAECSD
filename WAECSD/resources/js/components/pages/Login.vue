<template>
    <div class="py-10 sm:py-0">
		<div class='flex h-screen items-center justify-center '>
			<div class="w-full lg:flex-none sm:w-2/4 xl:w-1/4 bg-light-normal rounded mx-8 shadow-lg ">
                <div class="my-2">
                <div class="py-2 md:py-3 px-6">
                    <div class="flex flex-col items-center">
                    <div class="mt-6 text-blue">
                        <!-- <img src="../../assets/images/logo.svg" /> -->
                        Image
                    </div>
                    </div>
                </div>
                </div>

                <div class="bg-blue w-1/3 rounded-r-full shadow">
                <div class="ml-6 py-2">
                    <span class="text-white text-md font-bold">Sign In</span>
                </div>
                </div>

                <div class="">
                <div class="py-2 md:py-3 px-6">
                    <div class="">
                    <form action="" class="text-left my-2">
                        <div class="flex flex-col justify-center">
                        <div class="mt-4">
                            <label for="email" class="block">
                            <span class="text-gray-hard">Enter Email </span>
                            <input
                                type="email"
                                class="bg-light-hard p-2 w-full rounded-sm"
                                placeholder="imarnoel@gmail.com"
                                minlenght="8"
                                maxlenght="10"
                                required
                            />
                            </label>
                        </div>
                        <div class="mt-4">
                            <label for="" class="block">
                            <span class="text-gray-hard">Enter Password</span>
                            <input
                                type="password"
                                class="bg-light-hard p-2 w-full rounded-sm"
                                placeholder="*******"
                                minlenght="8"
                                maxlenght="10"
                                required
                            />
                            </label>
                        </div>

                        <button
                            class="bg-blue flex justify-center text-white mt-6 py-2 rounded "
                        >
                            <h1 class="text-light-normal font-semibold text-center">
                            Sign in
                            </h1>
                        </button>
                        <div class="mt-10 border-b border-blue"></div>
                        <div class="mt-4 text-center">
                            <span class="text-gray-hard text-xs"
                            >Don't have an account ?
                            <span class="text-blue font-bold"
                                ><a href="register">Sign Up</a></span></span>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
		</div>
	</div>
</template>

<script>
  export default {
    name: "Login",
	mounted() {
            console.log('Component mounted.')
        }
  };
</script>
