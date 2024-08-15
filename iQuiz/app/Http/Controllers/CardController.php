<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function showCards()
    {
        $cards = [
            (object) ['title' => 'ITILv4 Foundation', 'description' => 'This certification introduces you to the ITIL framework, focusing on key concepts of IT Service Management (ITSM) and the Service Value System (SVS). Ideal for those seeking to improve IT services and align them with business objectives.', 'url' => '#', 'buttonText' => 'Learn More'],
            (object) ['title' => 'AWS Cloud Practitioner', 'description' => "This entry-level certification covers fundamental AWS Cloud concepts and services. It's perfect for those wanting a basic understanding of AWS, including its use cases, billing, and cloud principles.", 'url' => '#', 'buttonText' => 'Learn More'],
            (object) ['title' => 'MS Azure Fundamentals', 'description' => "This exam provides an overview of Microsoft Azure's cloud services, including core concepts, pricing, and support. It's designed for beginners looking to understand Azure's foundational elements and cloud computing principles.", 'url' => '#', 'buttonText' => 'Learn More'],
            (object) ['title' => 'MS Azure Administrator', 'description' => "Focused on managing Azure environments, this certification tests your skills in configuring virtual networks, managing resources, and implementing storage solutions. It’s for those who handle Azure infrastructure and operations.", 'url' => '#', 'buttonText' => 'Learn More'],
            // Add more cards as needed
        ];

        return view('category.join', compact('cards'));
    }
}
