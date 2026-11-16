using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CameraController : MonoBehaviour
{
    public Transform target;
    float smooth = 0.1f;
    public Vector2 position;
    public float pixPerUnit = 16;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void LateUpdate()
    {

     
        if(transform.position != target.position)
        {
            Vector2 targetPosition = new Vector2(target.position.x, target.position.y);
            transform.position = Vector2.Lerp(transform.position, targetPosition, smooth);
        }   
    }
}
