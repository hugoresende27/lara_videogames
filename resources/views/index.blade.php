@extends('layouts.app')


@section('content')

<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games </h2>
    <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
        {{-- INICIO JOGO --}}
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="">
                    <img src="images/ff7.jpg" alt="game_cover" class=" w-20 lg:w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom:-20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>

                </div>

            </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        CyberPunk Remake
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                
            
        </div>
      {{-- FINAL JOGO --}}

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="">
                    <img src="images/ff7.jpg" alt="game_cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom:-20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>

                </div>

            </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        CyberPunk Remake
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                
            
        </div>


        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="">
                    <img src="images/ff7.jpg" alt="game_cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom:-20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>

                </div>

            </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        CyberPunk Remake
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                
            
        </div>


    </div>

    <div class="flex my-10">
    
        <div class="recently-reviewed w-3/4 mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>

            {{-- INICIO CARD JOGO REVIEWD --}}
            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">

                    <div class="relative flex-none">
                        <a href="">
                            <img src="images/ff7.jpg" alt="game_cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
        
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>
        
                        </div>
        
                    </div>

                    <div class="ml-12">

                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
                            CyberPunk Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quam sint distinctio tempora omnis nobis quos veniam veritatis reiciendis iste eum, quasi ad, iusto corporis? Aperiam sed nam facilis quos.</p>
    
                    </div>


                </div>

              
              
            </div>
            {{-- FINAL CARD JOGO REVIEWED --}}

            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">

                    <div class="relative flex-none">
                        <a href="">
                            <img src="images/ff7.jpg" alt="game_cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
        
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>
        
                        </div>
        
                    </div>

                    <div class="ml-12">

                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
                            CyberPunk Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quam sint distinctio tempora omnis nobis quos veniam veritatis reiciendis iste eum, quasi ad, iusto corporis? Aperiam sed nam facilis quos.</p>
    
                    </div>


                </div>

              
              
            </div>

            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">

                    <div class="relative flex-none">
                        <a href="">
                            <img src="images/ff7.jpg" alt="game_cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
        
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>
        
                        </div>
        
                    </div>

                    <div class="ml-12">

                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
                            CyberPunk Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quam sint distinctio tempora omnis nobis quos veniam veritatis reiciendis iste eum, quasi ad, iusto corporis? Aperiam sed nam facilis quos.</p>
    
                    </div>


                </div>

              
              
            </div>

            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">

                    <div class="relative flex-none">
                        <a href="">
                            <img src="images/ff7.jpg" alt="game_cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
        
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >88%</div>
        
                        </div>
        
                    </div>

                    <div class="ml-12">

                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
                            CyberPunk Remake
                        </a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="mt-6 text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quam sint distinctio tempora omnis nobis quos veniam veritatis reiciendis iste eum, quasi ad, iusto corporis? Aperiam sed nam facilis quos.</p>
    
                    </div>


                </div>

              
              
            </div>
        </div>
    
        <div class="most-anticipated w-1/4">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most antecipated</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">

                        <img src="images/ff7.jpg" alt="game_cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">


                    </a>

                    <div class="ml-4">
                        <a href="" class="hove:text-gray-300">CyberPunk 2077</a>
                        <p class="text-gray-400 text-sm mt-1">Sept 16 2020</p>
                    </div>

                </div>
            </div>
        </div>
    
    </div>


</div>


    
@endsection