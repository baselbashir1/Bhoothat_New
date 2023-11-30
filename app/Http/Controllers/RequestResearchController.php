<?php

namespace App\Http\Controllers;

use App\Http\Enums\EducationLevelArabic;
use App\Http\Enums\EducationLevelEnglish;
use App\Models\ResearchRequest;
use Illuminate\Http\Request;

class RequestResearchController extends Controller
{
    public function requestResearch()
    {
        $educationLevelEnglish = EducationLevelEnglish::getEducationLevelEnglish();
        $educationLevelArabic = EducationLevelArabic::getEducationLevelArabic();
        if (app()->getLocale() == 'en') return view('pages.request-research', ['title' => __('trans.bhoothat')], ['educationLevelEnglish' => $educationLevelEnglish]);
        if (app()->getLocale() == 'ar') return view('pages-rtl.request-research', ['title' => __('trans.bhoothat')], ['educationLevelArabic' => $educationLevelArabic]);
    }

    public function storeRequestResearch(Request $request)
    {
        try {
            $formFields = $request->validate([
                'phone' => 'required',
                'education_level' => 'required',
                'research_topic' => 'required',
                'teacher_name' => 'nullable',
                'notes' => 'nullable'
            ]);

            $userId = auth()->user()->id;

            $researchRequest = ResearchRequest::create([
                'phone' => $formFields['phone'],
                'education_level' => $formFields['education_level'],
                'research_topic' => $formFields['research_topic'],
                'teacher_name' => $formFields['teacher_name'],
                'notes' => $formFields['notes'],
                'user_id' => $userId,
            ]);

            $locale = app()->getLocale();
            $messageKey = $researchRequest ? 'msg_request_success' : 'msg_request_error';
            $messageType = $researchRequest ? 'success' : 'error';

            if ($locale == "en") return redirect('/request-research')->with($messageType, __('trans.' . $messageKey));
            if ($locale == "ar") return redirect('/rtl/request-research')->with($messageType, __('trans.' . $messageKey));
        } catch (\Exception $e) {
            $locale = app()->getLocale();
            return redirect()->back()->withErrors('error', __('trans.msg_request_error'));
        }
    }

    // public function upload(Request $request)
    // {
    //     $request->validate([
    //         'pdf_file' => 'required|mimes:pdf|max:2048', // PDF file, max size 2MB
    //     ]);

    //     $file = $request->file('pdf_file');
    //     $fileName = time() . '_' . $file->getClientOriginalName();
    //     $file->storeAs('pdfs', $fileName, 'public'); // Store in storage/app/public/pdfs

    //     return redirect()->route('upload.form')->with('success', 'PDF file uploaded successfully.');
    // }

    // public function download($file)
    public function download()
    {
        // $filePath = storage_path("app/public/pdfs/{$file}");
        $filePath = storage_path("/test.pdf");

        return response()->download($filePath, basename($filePath));
    }
}
