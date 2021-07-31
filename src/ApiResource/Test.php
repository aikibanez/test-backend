<?php

namespace App\ApiResource;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Description of Agenda
 *
 * @author manxomatt
 * 
 * @ApiResource(
 *  collectionOperations={
 *      "binarytodecimal"={
 *          "method"="post",
 *          "path"="/binarytodecimal",
 *          "controller"="App\Controller\CompController::binarytodecimal",
 *          "openapi_context"={
 *              "summary"="Binary to decimal",
 *              "requestBody"={
 *                   "content"={
 *                      "application/json"={
 *                          "schema"={
 *                              "type"="object",  
 *                              "properties"={
 *                                  "input"= { "type"= "int" },
 *                              }      
 *                          },
 *                          "example"={
 *                               "input" = 1001,
 *                          }  
 *                       }
 *                   }
 *              }
 *          }
 *      },
 *    "decimaltobinary"={
 *          "method"="post",
 *          "path"="/decimaltobinary",
 *          "controller"="App\Controller\CompController::decimaltobinary",
 *          "openapi_context"={
 *              "summary"="Binary to decimal",
 *              "requestBody"={
 *                   "content"={
 *                      "application/json"={
 *                          "schema"={
 *                              "type"="object",  
 *                              "properties"={
 *                                  "input"= { "type"= "int" },
 *                              }      
 *                          },
 *                          "example"={
 *                               "input" = 19,
 *                          }  
 *                       }
 *                   }
 *              }
 *          }
 *      },
 * 
 * 
 * },
 *  itemOperations={
 *      
 * 
 *  }
 * )
 */
class Test
{
  /**
   *
   * @ApiProperty(identifier=true)
   * @var int
   */
  public $course_id;

  /** 
   * @var int
   * 
   */
  public $event_id;
  /** 
   * @var string
   * 
   */
  public $title;

  /** 
   * @var string
   * 
   */
  public $content;
  /** 
   * @var string|null
   * 
   */
  public $comment;
  /** 
   * @var boolean
   * 
   */
  public $all_day;
  /** 
   * @var int
   * 
   */
  public $session_id;

  /** 
   * @var string
   * 
   */
  public $color;
}
