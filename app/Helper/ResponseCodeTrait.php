<?php
/**
 * Created by PhpStorm.
 * User: X1402
 * Date: 8/29/2017
 * Time: 11:48 AM
 */

namespace App\helper;

use Illuminate\Http\Response;

trait ResponseCodeTrait
{
    public function respondCreated($message, $data)
    {
        return response()->json([
            'status' => 'SUCCESS',
            'status_code' => Response::HTTP_CREATED,
            'message' => $message,
            'data' => $data,
        ], 201);
    }

    public function respondErrorClient($message)
    {
        return response()->json([
            'status' => 'FAIL',
            'status_code' => Response::HTTP_BAD_REQUEST,
            'message' => $message,
        ], 400);
    }
    public function respondErrorToken($message)
    {
        return response()->json([
            'status' => 'FAIL',
            'status_code' => Response::HTTP_UNAUTHORIZED,
            'message' => $message,
        ], 400);
    }

    public function respondErrorNotFound($message)
    {
        return response()->json([
            'status' => 'FAIL',
            'status_code' => Response::HTTP_NOT_FOUND,
            'message' => $message,
        ], 404);
    }

    public function respondCreatedNodata($message)
    {
        return response()->json([
            'status' => 'SUCCESS',
            'status_code' => Response::HTTP_CREATED,
            'message' => $message,
        ], 201);
    }

    public function responseSucessWithPaginate($limit, $data)
    {
        if ($data->total() == 0) {
            return response()->json([
                'status' => 'FAIL',
                'status_code' => Response::HTTP_NO_CONTENT,
                'message' => "No data Found",
            ], 404);

        } else {
            return response()->json([
                'status' => 'SUCCESS',
                'limit' => $limit,
                'status_code' => Response::HTTP_OK,
                'currentpage' => $data->perPage(),
                'total_count' => $data->total(),
                'total_page' => ceil($data->total() / $data->perPage()),
                'data' => $data->getCollection(),
            ], 200);
        }

    }

    public function responseSucessWithPaginateCustomize($limit, $data)
    {
        return response()->json([
            'status' => 'SUCCESS',
            'limit' => $limit,
            'status_code' => Response::HTTP_CREATED,
            'currentpage' => $data->count(),
            'total_count' => $data->total(),
            'total_page' => ceil($data->total() / $data->perPage()),
            'hasMoreData' => $data->hasMorePages(),
            'next_page' => $data->nextPageUrl(),
            'data' => $data->getCollection(),
        ], 200);
    }
}