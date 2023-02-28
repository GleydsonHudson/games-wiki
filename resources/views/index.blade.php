<x-app-layout>
	<div class="container mx-auto px-4">
		
		<h2 class="text-blue-500 uppercase tracking-wide font-semibold">
			popular games
		</h2>
		
		<div class="popular-game mx-auto text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
			
			<div class="game mt-8">
				
				<div class="relative inline-block">
					
					<a href="#">
						<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
						     class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					
					<div class="absolute -bottom-5 -right-5 w-16 h-16 bg-gray-800 rounded-full">
						<div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
					</div>
				</div>
				
				<a href="http://" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
					Name of the game
				</a>
				
				<div class="text-gray-400 mt-1">platform</div>
			</div>
			
			<div class="game mt-8">
				
				<div class="relative inline-block">
					
					<a href="#">
						<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
						     class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					
					<div class="absolute -bottom-5 -right-5 w-16 h-16 bg-gray-800 rounded-full">
						<div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
					</div>
				</div>
				
				<a href="http://" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
					Name of the game
				</a>
				
				<div class="text-gray-400 mt-1">platform</div>
			</div>
			
			<div class="game mt-8">
				
				<div class="relative inline-block">
					
					<a href="#">
						<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
						     class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					
					<div class="absolute -bottom-5 -right-5 w-16 h-16 bg-gray-800 rounded-full">
						<div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
					</div>
				</div>
				
				<a href="http://" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
					Name of the game
				</a>
				
				<div class="text-gray-400 mt-1">platform</div>
			</div>
		</div> {{-- end popular games --}}
		
		<div class="flex flex-col lg:flex-row my-10">
			
			<div class="recently-reviewed w-full mr-0 lg:w-3/4 lg:mr-32">
				
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
				
				<div class="recently-reviewed-container space-y-12 mt-8">
					<div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
						
						<div class="relative flex-none">
							
							<a href="#">
								<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
								     class="w-48 hover:opacity-75 transition ease-in-out duration-150">
							</a>
							
							<div class="absolute -bottom-5 -right-5 w-16 h-16 bg-gray-900 rounded-full">
								<div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
							</div>
						</div>
						
						<div class="ml-12">
							<a href="#"
							   class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
								Name of the game
							</a>
							
							<div class="text-gray-400 mt-1">platform</div>
							
							<p class="mt-6 tex-gray-400 hidden lg:block">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi est rem
								reprehenderit voluptatibus. Amet consequuntur dolor dolore doloremque ducimus enim eum,
								ex laboriosam necessitatibus obcaecati omnis perspiciatis reiciendis saepe sit sunt
								tempora tempore temporibus totam vero voluptatum. Asperiores assumenda consequatur hic
								laboriosam, minus nulla quasi veniam voluptas! Beatae consequatur eum hic iste
								laudantium maxime numquam odit porro quidem quo.
							</p>
						
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="most-anticipated mt-12 lg:mt-0 lg:w-1/4">
				
				<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
				
				<div class="most-anticipated-container space-y-10 mt-8">
					<div class="game flex">
						
						<a href="#">
							<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
							     class="w-16 hover:opacity-75 transition ease-in-out duration-150">
						</a>
						
						<div class="ml-4">
							<a href="#" class="hover:text-gray-300">Name of the Game</a>
							<div class="text-gray-400 text-sm mt-1">Date of the Game</div>
						</div>
					</div>
				</div>
				
				<div class="mt-12">
					<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Coming Soon</h2>
					
					<div class="coming-soon-container space-y-10 mt-8">
						<div class="game flex">
							
							<a href="#">
								<img src="{{ asset('images/ff7.jpg') }}" alt="game cover"
								     class="w-16 hover:opacity-75 transition ease-in-out duration-150">
							</a>
							
							<div class="ml-4">
								<a href="#" class="hover:text-gray-300">Name of the Game</a>
								<div class="text-gray-400 text-sm mt-1">Date of the Game</div>
							</div>
						</div>
					</div>
				</div>
			
			
			</div> {{-- end of most anticipated --}}
		
		</div>
	
	</div>
</x-app-layout>