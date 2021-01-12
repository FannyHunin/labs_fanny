<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\CenterTeam;
use App\Models\ContactForm;
use App\Models\Icon;
use App\Models\Navlink;
use App\Models\Moto;
use App\Models\Main;
use App\Models\Presentation;
use App\Models\PrimeService;
use App\Models\Service;
use App\Models\ServiceTitle;
use App\Models\Team;
use App\Models\TeamTitle;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iconData = Icon::all();

        $linkData = Navlink::all()[0];

        $carouselData = Carousel::all();

        $motoData = Moto::all()[0];

        $quickServiceData = Service::all()->random(3);

        $serviceData = Service::orderBy('id', 'desc')->paginate(9);

        $presentationData = Presentation::all()[0];
        $selection = $presentationData->title;
        $start = Str::before($selection, '(');
        $end = Str::after($selection, ')');
        $cut = Str::between($selection, '(', ')');

        $videoData = Video::all()[0];

        $testimonialsData = Testimonial::all()->take(6)->reverse();

        $contactFormData = ContactForm::all()[0];

        $teamsTitleData = TeamTitle::all()[0];
        $selectionTT = $teamsTitleData->title;
        $startTT = Str::before($selectionTT, '(');
        $endTT = Str::after($selectionTT, ')');
        $cutTT = Str::between($selectionTT, '(', ')');

        $teamsData = Team::all();
        $centerTeamData = CenterTeam::all();
        $randomTeamData1 = Team::all()->except($centerTeamData[0]->center->id)->random(1);
        $randomTeamData2 = Team::all()->except([$centerTeamData[0]->center->id, $randomTeamData1[0]->id])->random(1);



        return view(
            'pages.home',
            compact(
                'iconData',
                'linkData',
                'carouselData',
                'motoData',
                'quickServiceData',
                'serviceData',
                'presentationData',
                'start',
                'end',
                'cut',
                'videoData',
                'testimonialsData',
                'contactFormData',
                'teamsTitleData',
                'selectionTT',
                'startTT',
                'endTT',
                'cutTT',
                'teamsData',
                'centerTeamData',
                'randomTeamData1',
                'randomTeamData2',
            )
        );
    }
    public function services()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];
        $serviceData = Service::simplePaginate(9);
        $primeServicesData = PrimeService::all()->take(3);
        $primeServicesData2 = PrimeService::all()->take(3)->reverse();

        $serviceTitleData = ServiceTitle::all()[0];
        $selectionST = $serviceTitleData->title;
        $startST = Str::before($selectionST, '(');
        $endST = Str::after($selectionST, ')');
        $cutST = Str::between($selectionST, '(', ')');

        return view(
            'pages.services',
            compact(
                'iconData',
                'linkData',
                'serviceData',
                'primeServicesData',
                'primeServicesData2',
                'selectionST', 
                'startST',
                'endST',
                'cutST',
            )
        );
    }
    public function blog()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];

        return view('pages.blog', compact('iconData', 'linkData'));
    }
    public function contact()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];

        return view('pages.contact', compact('iconData', 'linkData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $main)
    {
        //
    }
}
