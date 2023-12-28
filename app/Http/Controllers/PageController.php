<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Services\NewsService;

class PageController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function core_value()
    {
        return view('core_value');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function merge_signal_strategy()
    {
        return view('merge_signal_strategy');
    }

    public function grand_pacific_strategy()
    {
        return view('grand_pacific_strategy');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function news()
    {
        $articles = $this->newsService->fetchTopHeadlines();

        return view('news', [
            'articles' => $articles,
        ]);
    }

    public function send_mail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $input = $request->all();

        //  Send mail to owner
        Mail::send('contact_mail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'messages' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('votingsystem2308@gmail.com', 'We Venture');
        });

        return redirect()->back()->with(['success' => trans('public.send_success')]);
    }
}
