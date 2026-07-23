<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Display all members
    public function index()
    {
        return response()->json(Member::all(), 200);
    }

    // Store a new member
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:members',
            'name' => 'required',
            'course' => 'required',
            'year_level' => 'required|integer',
            'organization' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:members'
        ]);

        $member = Member::create($validated);

        return response()->json([
            'message' => 'Member created successfully.',
            'data' => $member
        ], 201);
    }

    // Display one member
    public function show($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'message' => 'Member not found.'
            ], 404);
        }

        return response()->json($member);
    }

    // Update a member
    public function update(Request $request, $id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'message' => 'Member not found.'
            ], 404);
        }

        $member->update($request->all());

        return response()->json([
            'message' => 'Member updated successfully.',
            'data' => $member
        ]);
    }

    // Delete a member
    public function destroy($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json([
                'message' => 'Member not found.'
            ], 404);
        }

        $member->delete();

        return response()->json([
            'message' => 'Member deleted successfully.'
        ]);
    }
}