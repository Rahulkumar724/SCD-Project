<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /** Home page */
    public function home()
    {
        return view('home');
    }

    /** Mentors page with dynamic dataset (future: DB/API) */
    public function mentors()
    {
        $mentors = [
            [
                'name'  => 'Ayesha Khan',
                'title' => 'Backend Engineer • Laravel',
                'bio'   => 'Helps with PHP/Laravel, APIs, and MVC patterns.',
                'rate'  => 2500,
                'skills'=> ['Laravel','REST','MySQL','OOP'],
            ],
            [
                'name'  => 'Bilal Ahmed',
                'title' => 'Data Analyst • Python',
                'bio'   => 'Pandas, NumPy, Matplotlib, and EDA best practices.',
                'rate'  => 2200,
                'skills'=> ['Python','Pandas','EDA','Visualization'],
            ],
            [
                'name'  => 'Hira Fatima',
                'title' => 'Frontend Dev • React/Bootstrap',
                'bio'   => 'Responsive UIs, Bootstrap layouts, accessibility.',
                'rate'  => 2000,
                'skills'=> ['HTML','CSS','Bootstrap','React'],
            ],
            [
                'name'  => 'Usman Malik',
                'title' => 'DevOps • CI/CD',
                'bio'   => 'Intro to pipelines, Docker basics, deployment flow.',
                'rate'  => 2800,
                'skills'=> ['GitHub Actions','Docker','Deployment'],
            ],
            [
                'name'  => 'Noor Ali',
                'title' => 'Mobile Dev • Flutter',
                'bio'   => 'State management, navigation, and REST integration.',
                'rate'  => 2600,
                'skills'=> ['Flutter','Dart','REST'],
            ],
            [
                'name'  => 'Zara Iqbal',
                'title' => 'Cybersecurity • Basics',
                'bio'   => 'OWASP Top 10, secure coding tips, simple audits.',
                'rate'  => 2400,
                'skills'=> ['Security','OWASP','Audits'],
            ],
        ];

        return view('mentors', compact('mentors'));
    }

    /** Contact (GET) */
    public function contactShow()
    {
        return view('contact');
    }

    /** Contact (POST) */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required','string','max:100'],
            'email'   => ['required','email'],
            'message' => ['required','string','min:10'],
        ]);

        // Future: persist, email, or integrate with booking system.
        return redirect()->route('contact.show')
            ->with('message', 'Thanks, '.$validated['name'].' — we will reply soon!');
    }
}
