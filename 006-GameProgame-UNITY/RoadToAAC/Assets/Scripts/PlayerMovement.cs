using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Platformer.Gameplay;
using static Platformer.Core.Simulation;
using Platformer.Model;
using Platformer.Core;



public class PlayerMovement : MonoBehaviour
{

    // !!
    public Rigidbody2D rg;
    public float base_Speed = 10.0f;
    private Vector2 direction = new Vector2(1f,0f);
    public AudioClip jumpaudio;
    AudioSource audioSource;
    public SpriteRenderer playershadow;
    public float jumpheight = 50f;
    public AudioClip walkaudio;

    public float jumptimer;
    public float gravity = 1;
    bool IsJump = false;
    // float mspeed;
    // float horizontal;
    // float vertical;
    public Animator animator;

    // !!

    void Awake()
    {
        
    }

    void Start()
    {
        audioSource = GetComponent<AudioSource>();
    }



    // Update is called once per frame
    void Update()
    {

       Vector2 movement = new Vector2(Input.GetAxis("Horizontal"),Input.GetAxis("Vertical"));
        Vector2 jumpmove = new Vector2(Input.GetAxis("Horizontal"),Input.GetAxis("Jump"));

        if(Input.GetButtonDown("Jump"))
        {
            jumpmove = Vector2.up * jumpheight;
         //   IsJump = true;
        }
        else
        {
            jumpmove += Physics2D.gravity * Time.deltaTime;
        }

        jumpmove.y = Mathf.Max(jumpmove.y, -1f);
         
        rg.MovePosition(rg.position + jumpmove * Time.deltaTime);
        
        


        
          if(!Mathf.Approximately(movement.x, 0.0f) || !Mathf.Approximately(movement.y, 0.0f))
        {
            direction.Set(movement.x, movement.y);
            direction.Normalize();
        }

        animator.SetFloat("Horizontal", direction.x);
        animator.SetFloat("Vertical", direction.y);
        animator.SetFloat("Magnitude", movement.magnitude);

       // transform.position = transform.position + (Vector3)movement * Time.deltaTime * base_Speed;
        rg.MovePosition(rg.position + movement * Time.deltaTime * base_Speed);
        Vector2 Position = rg.position;
    }

    void FixedUpdate()
    {
        
    }



    void jumping()
    {


        
    }
}
