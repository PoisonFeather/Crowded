using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class List_script : MonoBehaviour
{
    public int n;
    public GameObject RestaurantPrefab;
    public GameObject nextrest;
    public GameObject list;
    private float offset;
    private int i;
    void Start()
    {
        i = 1;
        offset = -130;
    }
    // -372.8f
    void Update()
    {
        if (i < n)
        {
            GameObject r = Instantiate(RestaurantPrefab) as GameObject;
            r.transform.SetParent(list.transform);
            r.transform.localScale= new Vector2(1, 1);
            r.transform.position = new Vector2(nextrest.transform.position.x, nextrest.transform.position.y + offset);
            offset += -130;
            i++;
        }
    }
}
